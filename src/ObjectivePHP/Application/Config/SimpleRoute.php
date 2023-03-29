<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Config;

use Fei\ApiServer\ObjectivePHP\Config\SingleValueDirectiveGroup;
use Fei\ApiServer\ObjectivePHP\Message\Request\RequestInterface;

class SimpleRoute extends SingleValueDirectiveGroup
{
    /**
     * @var
     */
    protected $action;

    /**
     * @var callable
     */
    protected $pathHelper;

    public function __construct($route, $path, $action = null)
    {

        if (!is_callable($path)) {
            $path = function (RequestInterface $request = null, $params = []) use ($path) {

                // no request is passed, so forge matching URL
                if (is_null($request)) {
                    return $path;
                }

                // else try to match Url
                return $path == $request->getUri()->getPath();
            };
        }

        $this->setAction($action);
        $this->pathHelper = $path;

        parent::__construct($route, $this);
    }

    public function matches(RequestInterface $request)
    {
        /** @var callable $pathHelper */
        $pathHelper = $this->pathHelper;
        return $pathHelper($request);
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }
}