<?php

namespace Fei\ApiServer\ObjectivePHP\ServicesFactory;

/**
 * Class ServicesFactoryAwareTrait
 *
 * @package ObjectivePHP\ServicesFactory
 */
trait ServicesFactoryAwareTrait
{
    /**
     * @var ServicesFactory
     */
    protected $servicesFactory;

    /**
     * @param ServicesFactory $servicesFactory
     *
     * @return $this
     */
    public function setServicesFactory(ServicesFactory $servicesFactory)
    {
        $this->servicesFactory = $servicesFactory;

        return $this;
    }
}
