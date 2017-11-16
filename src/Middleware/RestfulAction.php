<?php

namespace Fei\ApiServer\Middleware;

use ObjectivePHP\Application\Action\SubRoutingAction;

/**
 * Class RestfulAction
 *
 * @package Fei\ApiServer\Middleware
 */
class RestfulAction extends SubRoutingAction
{
    /**
     * @param array ...$args
     * @return mixed
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
