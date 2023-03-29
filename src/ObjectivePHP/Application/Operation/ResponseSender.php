<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Operation;

use Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface;
use Zend\Diactoros\Response\SapiEmitter;

/**
 * Class ResponseSender
 *
 * @package Fei\ApiServer\ObjectivePHP\Application\Task\Common
 */
class ResponseSender
{
    /**
     * @param ApplicationInterface $app
     */
    public function __invoke(ApplicationInterface $app)
    {
        $response = $app->getResponse();

        $emitter = new SapiEmitter();

        $emitter->emit($response);
    }
}