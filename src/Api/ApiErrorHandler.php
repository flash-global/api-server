<?php
    
namespace Fei\ApiServer\Api;

use ObjectivePHP\Application\ApplicationInterface;
use ObjectivePHP\Application\Middleware\AbstractMiddleware;
use Laminas\Diactoros\Response;
use Laminas\Diactoros\Response\JsonResponse;
use Laminas\Diactoros\Response\SapiEmitter;

class ApiErrorHandler extends AbstractMiddleware
{


    public function run(ApplicationInterface $app)
    {

        $e = $app->getException()->getPrevious() ?: $app->getException();

        $code = $e->getCode() && $e->getCode() > 199 && $e->getCode() < 599 ? $e->getCode() : 500;
        (new SapiEmitter())->emit(
            new JsonResponse(
                [
                'code' => $code,
                'error' => $e->getMessage(),
                'type' => get_class($e),
                'file' => $e->getFile(),
                'line' => $e->getLine()
                ],
                $code
            )
        );
    }
}
