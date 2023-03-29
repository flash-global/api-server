<?php

namespace Fei\ApiServer\ObjectivePHP\ServicesFactory;

/**
 * Interface ServicesFactoryAwareInterface
 *
 * @package Fei\ApiServer\ObjectivePHP\ServicesFactory
 */
interface ServicesFactoryAwareInterface
{
    /**
     * @param ServicesFactory $servicesFactory
     *
     * @return $this
     */
    public function setServicesFactory(ServicesFactory $servicesFactory);
}