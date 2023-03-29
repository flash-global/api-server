<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Middleware;

use Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface;
use Fei\ApiServer\ObjectivePHP\Invokable\InvokableInterface;
use Fei\ApiServer\ObjectivePHP\Notification\Stack;

/**
 * Interface MiddlewareInterface
 *
 * @package Fei\ApiServer\ObjectivePHP\Application\Hook
 */
interface MiddlewareInterface extends InvokableInterface
{
    public function getLabel();

    public function getReference();

    public function getNotifications(): Stack;
}