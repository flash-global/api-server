<?php

namespace Fei\ApiServer\ObjectivePHP\Invokable;

use Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface;
use Fei\ApiServer\ObjectivePHP\ServicesFactory\ServicesFactory;

/**
 * Interface InvokableInterface
 *
 * @package Fei\ApiServer\ObjectivePHP\Invokable
 */
interface InvokableInterface
{
    /**
     * Run the operation
     *
     * @param mixed                ...$args
     *
     * @return mixed
     */
    public function __invoke(...$args);

    /**
     * Return short description
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * @param ApplicationInterface $app
     * @return InvokableInterface
     */
    public function setApplication(ApplicationInterface $app): InvokableInterface;

    /**
     * @return ApplicationInterface
     */
    public function getApplication(): ApplicationInterface;

    /**
     * @return callable
     */
    public function getCallable();
}