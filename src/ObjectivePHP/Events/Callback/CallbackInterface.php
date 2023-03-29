<?php

namespace Fei\ApiServer\ObjectivePHP\Events\Callback;

use Fei\ApiServer\ObjectivePHP\Events\EventInterface;

interface CallbackInterface
{
    public function __invoke(EventInterface $event);
}