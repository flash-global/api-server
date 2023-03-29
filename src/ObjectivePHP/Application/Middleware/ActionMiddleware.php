<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Middleware;

use Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface;
use Fei\ApiServer\ObjectivePHP\Application\View\Helper\Vars;
use Fei\ApiServer\ObjectivePHP\Message\Response\HttpResponse;
use Fei\ApiServer\ObjectivePHP\Primitives\Collection\Collection;
use Fei\ApiServer\ObjectivePHP\Message\Response\ResponseInterface;
use Zend\Diactoros\Response;

/**
 * Class ActionMiddleware
 *
 * @package Fei\ApiServer\ObjectivePHP\Application\Middleware
 */
class ActionMiddleware extends EmbeddedMiddleware
{

    /**
     * @param ApplicationInterface $app
     * @return mixed
     * @throws \Fei\ApiServer\ObjectivePHP\Primitives\Exception
     * @internal param ApplicationInterface $application
     *
     */
    public function run(ApplicationInterface $app)
    {

        $result = parent::run($app);

        if ($result instanceof Response) {
            $app->setResponse($result);
        } else {
            // set default content type
            $app->setResponse((new HttpResponse())->withHeader('Content-Type', 'text/html'));

            Collection::cast($result)->each(function ($value, $var) {
                Vars::set($var, $value);
            });
        }
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Action Middleware encapsulating ' . parent::getDescription();
    }
}