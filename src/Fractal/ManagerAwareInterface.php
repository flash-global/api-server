<?php
/**
 * ManagerAwareInterface.php
 *
 * @date        6/10/17
 * @file        ManagerAwareInterface.php
 */

namespace Fei\ApiServer\Fractal;

use League\Fractal\Manager;

interface FractalManagerAwareInterface
{

    /**
     * @return Manager
     */
    public function getFractalManager(): Manager;


    /**
     * @param Manager $fractalManager
     *
     * @return $this
     */
    public function setFractalManager(Manager $fractalManager);
}
