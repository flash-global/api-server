<?php

namespace Fei\ApiServer\ObjectivePHP\Application;

use Fei\ApiServer\ObjectivePHP\Application\Workflow\Step;
use Fei\ApiServer\ObjectivePHP\Config\Config;
use Fei\ApiServer\ObjectivePHP\Events\EventsHandler;
use Fei\ApiServer\ObjectivePHP\Invokable\InvokableInterface;
use Fei\ApiServer\ObjectivePHP\Message\Request\RequestInterface;
use Fei\ApiServer\ObjectivePHP\Message\Response\ResponseInterface;
use Fei\ApiServer\ObjectivePHP\Primitives\Collection\Collection;
use Fei\ApiServer\ObjectivePHP\ServicesFactory\ServicesFactory;
use Zend\Diactoros\Response;

/**
 * Interface ApplicationInterface
 *
 * @package Fei\ApiServer\ObjectivePHP\Application
 */
interface ApplicationInterface
{

    /**
     * @return mixed
     */
    public function init();

    /**
     * @return mixed
     */
    public function run();

    /**
     * @return EventsHandler
     */
    public function getEventsHandler() : EventsHandler;

    /**
     * @return ServicesFactory
     */
    public function getServicesFactory() : ServicesFactory;

    /**
     * @return Config
     */
    public function getConfig() : Config;

    /**
     * @param RequestInterface $request
     *
     * @return ApplicationInterface
     */
    public function setRequest(RequestInterface $request) : ApplicationInterface;

    /**
     * @return RequestInterface
     */
    public function getRequest() : RequestInterface;

    /**
     * @param Response $request
     *
     * @return ApplicationInterface
     */
    public function setResponse(Response $request) : ApplicationInterface;

    /**
     * @return ResponseInterface
     */
    public function getResponse() : Response;

    /**
     * @param $step
     *
     * @return Step
     */
    public function getStep($step) : Step;

    /**
     * @return Collection
     */
    public function getSteps() : Collection;

    /**
     * @param \Throwable $exception
     *
     * @return ApplicationInterface
     */
    public function setException(\Throwable $exception) : ApplicationInterface;

    /**
     * @return \Throwable
     */
    public function getException() : \Throwable;

    /**
     * @param mixed $invokable
     *
     * @return ApplicationInterface
     */
    public function setExceptionHandler($invokable) : ApplicationInterface;

    /**
     * @return InvokableInterface
     */
    public function getExceptionHandler() : InvokableInterface;

    /**
     * @return array
     */
    public function getExecutionTrace() : array;


    /**
     * @return string
     */
    public function getEnv() : string;
}
