<?php

namespace Fei\ApiServer\ObjectivePHP\Application;

/**
 * Interface ApplicationAwareInterface
 *
 * @package Fei\ApiServer\ObjectivePHP\Application
 */
interface ApplicationAwareInterface
{
    /**
     * @param ApplicationInterface $application
     */
    public function setApplication(ApplicationInterface $application);
}