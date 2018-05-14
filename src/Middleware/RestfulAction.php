<?php

namespace Fei\ApiServer\Middleware;

use ObjectivePHP\Application\Action\SubRoutingAction;
use ObjectivePHP\Primitives\String\Str;

/**
 * Class RestfulAction
 *
 * @package Fei\ApiServer\Middleware
 */
class RestfulAction extends SubRoutingAction
{
    /**
     * @param array ...$args
     *
     * @return mixed
     *
     * @throws \ObjectivePHP\Application\Exception
     */
    public function __invoke(...$args)
    {
        return parent::__invoke(...$args);
    }

    /**
     * @return mixed
     */
    public function route()
    {
        $methodName = (new Str($this->getApplication()->getRequest()->getMatchedRoute()->getName()))
            ->snakeCase()
            ->camelCase()
            ->getInternalValue();
        $callable = $this->getCallable();
        if (method_exists($callable, $methodName)) {
            return $methodName;
        }

        $verb = $this->getApplication()->getRequest()->getMethod();

        return strtolower($verb);
    }

    /**
     * @param $reference
     * @return array
     */
    public function getMiddleware($reference)
    {
        if (method_exists($this, $reference)) {
            return [$this, $reference];
        }
    }
}
