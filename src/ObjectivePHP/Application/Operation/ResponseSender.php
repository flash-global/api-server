<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Operation;

use ObjectivePHP\Application\ApplicationInterface;
use Laminas\Diactoros\Response\SapiEmitter;

/**
 * Class ResponseSender
 *
 * @package ObjectivePHP\Application\Task\Common
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
