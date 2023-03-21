<?php

namespace Fei\ApiServer\ObjectivePHP\Notification;

/**
 * Class Info
 * @package ObjectivePHP\Notification
 */
class Info extends AbstractMessage
{
    protected $type = 'info';

    protected $isError = false;
}