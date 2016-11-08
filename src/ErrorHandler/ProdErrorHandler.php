<?php

namespace Fei\ApiServer\ErrorHandler;


use ObjectivePHP\Application\ApplicationInterface;
use ObjectivePHP\Application\Middleware\AbstractMiddleware;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\SapiEmitter;

class ProdErrorHandler extends AbstractMiddleware
{

    public function run(ApplicationInterface $app)
    {
        $error = $app->getException()->getPrevious() ?: $app->getException();
        $code = $error->getCode() && $error->getCode() > 199 && $error->getCode() < 599 ? $error->getCode() : 500;
        $res = new HtmlResponse("", $code);

        (new SapiEmitter())->emit($res->withBody($res->getReasonPhrase()));
    }
}