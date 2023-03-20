<?php

/**
 * ManagerAwareTrait.php
 *
 * @date 6/10/17
 * @file ManagerAwareTrait.php
 */

namespace Fei\ApiServer\Fractal;

use League\Fractal\Manager;
use ObjectivePHP\ServicesFactory\Annotation\Inject;

trait FractalManagerAwareTrait
{

    /**
     * @Inject(service="fractal.manager")
     * @var Manager
     */
    protected $fractalManager;


    /**
     * @return Manager
     */
    public function getFractalManager(): Manager
    {
        return $this->fractalManager;
    }

    /**
     * @param Manager $fractalManager
     *
     * @return $this
     */
    public function setFractalManager(Manager $fractalManager)
    {
        $this->fractalManager = $fractalManager;

        return $this;
    }
}
