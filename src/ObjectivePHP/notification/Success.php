<?php

namespace Fei\ApiServer\ObjectivePHP\Notification;

/**
 * Class Success
 * @package Fei\ApiServer\ObjectivePHP\Notification
 */
class Success extends AbstractMessage
{
    protected $type = 'success';

    protected $isError = false;
}
