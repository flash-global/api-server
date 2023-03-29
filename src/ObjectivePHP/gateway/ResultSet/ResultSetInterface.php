<?php

namespace Fei\ApiServer\ObjectivePHP\Gateway\ResultSet;

use Fei\ApiServer\ObjectivePHP\Gateway\Entity\EntityInterface;

/**
 * Interface ResultSetInterface
 *
 * @package Fei\ApiServer\ObjectivePHP\Gateway\Entity
 */
interface ResultSetInterface extends \Traversable, \Countable
{
    /**
     * @return array
     */
    public function toArray();

    /**
     * @return bool
     */
    public function isEmpty();

    /**
     * @param EntityInterface[] ...$entities
     * @return mixed
     */
    public function addEntities(EntityInterface...$entities): ResultSetInterface;
}
