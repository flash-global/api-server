<?php

namespace Fei\ApiServer\ObjectivePHP\Message\Response;

use Psr\Http\Message\StreamInterface;

/**
 * Interface ResponseInterface
 *
 * @package Fei\ApiServer\ObjectivePHP\Message\Response
 */
interface ResponseInterface
{
    /**
     * @return StreamInterface
     */
    public function getBody();
}
