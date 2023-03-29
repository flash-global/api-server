<?php

namespace Fei\ApiServer\ObjectivePHP\Events\Callback;

use Fei\ApiServer\ObjectivePHP\Events\EventInterface;
use Fei\ApiServer\ObjectivePHP\Primitives\Collection\Collection;

/**
 * Class CallbacksAggregate
 *
 * Binding several callbacks using a callback aggregate ensures
 * that callbacks will be executed in a raw
 *
 * @package Fei\ApiServer\ObjectivePHP\Events\Callback
 */
class CallbacksAggregate extends AliasedCallback
{
    /**
     * @var Collection
     */
    protected $callbacks;

    /**
     * @param $alias        string          Aggregate alias
     * @param ...$callbacks array|callable  List or array of callbacks
     */
    public function __construct($alias, ...$callbacks)
    {
        // check if callbacks have been passed as an array
        if (is_array($callbacks[0]) && !is_callable($callbacks[0])) {
            $callbacks = $callbacks[0];
        }

        $this->callbacks = (new Collection)->append(...$callbacks);

        parent::__construct($alias, $this);
    }

    /**
     * @return Collection
     */
    public function getCallbacks()
    {
        return $this->callbacks;
    }
}