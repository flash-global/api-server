<?php

namespace Fei\ApiServer\Middleware;

use Fei\ApiServer\Service\JsonApi\JsonApiManager;
use Fei\ApiServer\Service\JsonApi\JsonApiManagerAwareTrait;
use Fei\Entity\EntityInterface;
use Fei\Entity\EntitySetInterface;
use ObjectivePHP\Application\ApplicationInterface;
use ObjectivePHP\Invokable\Invokable;
use ObjectivePHP\ServicesFactory\Annotation\Inject;
use ObjectivePHP\ServicesFactory\Specs\InjectionAnnotationProvider;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response;
use Zend\Diactoros\Response\JsonResponse;

/**
 * Class JsonApiResponder
 *
 * @package Fei\ApiServer\Middleware
 */
class JsonApiResponder implements InjectionAnnotationProvider
{
    use JsonApiManagerAwareTrait;

    /**
     * @var JsonApiManager
     *
     * @Inject(service="manager.jsonapi")
     */
    protected $jsonApiManager;

    /**
     * @param ApplicationInterface $application
     *
     * @return ResponseInterface
     */
    public function __invoke(ApplicationInterface $application)
    {
        $matchedRoute = $application->getRequest()->getMatchedRoute();

        $action = Invokable::cast($matchedRoute->getAction());
        $application->getServicesFactory()->injectDependencies($action->getCallable());

        $application->setParam('runtime.action.middleware', $action);

        $result = $action->getCallable()($application);

        if ($result instanceof ResponseInterface) {
            return $result;
        }

        $code = $this->getCode($application->getRequest(), $result);

        if ($code == 204) {
            return new Response('php://memory', $code, ['Content-Type' => 'application/vnd.api+json']);
        }

        $data = null;

        if ($result instanceof EntityInterface) {
            $data = $this->getJsonApiManager()->createData($result)->toArray();
        } elseif ($result instanceof EntitySetInterface) {
            $data = $this->getJsonApiManager()->createDataCollection($result)->toArray();
        }

        return new JsonResponse($data, $code, ['Content-Type' => 'application/vnd.api+json']);
    }

    /**
     * Get the HTTP code of the response
     *
     * @param RequestInterface $request
     * @param mixed            $result
     *
     * @return int
     */
    protected function getCode(RequestInterface $request, $result): int
    {
        if ($request->getMethod() == 'POST') {
            return 201;
        } elseif ($request->getMethod() == 'PUT') {
            return 200;
        } elseif ($request->getMethod() == 'DELETE') {
            if (empty($result)) {
                return 204;
            }

            return 200;
        }

        return 200;
    }
}
