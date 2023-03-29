<?php

namespace Fei\ApiServer\ObjectivePHP\Message\Request\Parameter\Container;

use Fei\ApiServer\ObjectivePHP\Message\Request\Parameter\Container\AbstractContainer;
use Fei\ApiServer\ObjectivePHP\Message\Request\RequestInterface;
use Fei\ApiServer\ObjectivePHP\Primitives\Collection\Collection;

class CliParameterContainer extends AbstractContainer
{

    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * @var Collection
     */
    protected $params;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->params = new Collection([
            'cli' => new Collection(),
            'env' => new Collection()
        ]);
    }

    public function get($param, $default = null, $origin = 'cli')
    {
        return $this->params->get($origin)->get($param, $default);
    }


    public function fromCli($param, $default = null)
    {
        return $this->get($param, $default, 'cli');
    }

    public function fromEnv($var, $default = null)
    {
        return $this->get($var, $default, 'env');
    }

    /**
     * @return RequestInterface
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestInterface $request
     *
     * @return $this
     */
    public function setRequest(RequestInterface $request)
    {
        $this->request = $request;

        return $this;
    }
}