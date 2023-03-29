<?php

namespace Fei\ApiServer\ObjectivePHP\Notification;

/**
 * Class Warning
 * @package Fei\ApiServer\ObjectivePHP\Notification
 */
class Warning extends AbstractMessage
{
    protected $type = 'warning';

    protected $isError = true;
}