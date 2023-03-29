<?php

namespace Fei\ApiServer\ObjectivePHP\Events\Callback;

use Fei\ApiServer\ObjectivePHP\Events\EventInterface;

abstract class AbstractCallback implements CallbackInterface
{
    public function __invoke(EventInterface $event)
    {
        return $this->run($event);
    }

    abstract public function run(EventInterface $event);
}
