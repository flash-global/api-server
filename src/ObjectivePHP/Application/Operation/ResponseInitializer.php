<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Operation;

use Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface;
use Fei\ApiServer\ObjectivePHP\Message\Response\HttpResponse;

/**
 * Class ResponseInitializer
 *
 * @package Fei\ApiServer\ObjectivePHP\Application\Task\Common
 */
class ResponseInitializer
{
    /**
     * Instantiate Response
     *
     * @param ApplicationInterface $app
     */
    public function __invoke(ApplicationInterface $app)
    {
        // TODO handle CLI repsonse
        $app->setResponse(new HttpResponse());
    }
}