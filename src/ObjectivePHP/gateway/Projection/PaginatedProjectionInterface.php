<?php

namespace Fei\ApiServer\ObjectivePHP\Gateway\Projection;

use Fei\ApiServer\ObjectivePHP\Gateway\Projection\ProjectionInterface;

/**
 * Interface PaginatedResultSetInterface
 *
 * @package Fei\ApiServer\ObjectivePHP\Gateway\Entity
 */
interface PaginatedProjectionInterface extends ProjectionInterface
{
    /**
     * @return int
     */
    public function getCurrentPage();

    /**
     * @return int
     */
    public function getTotal();

    /**
     * @return int
     */
    public function getPageSize();
}
