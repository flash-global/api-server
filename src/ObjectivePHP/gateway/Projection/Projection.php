<?php

namespace Fei\ApiServer\ObjectivePHP\Gateway\Projection;

/**
 * Class Projection
 * @package Fei\ApiServer\ObjectivePHP\Gateway\Projection
 */
class Projection extends \ArrayObject implements ProjectionInterface
{
    /**
     * @return array
     */
    public function toArray()
    {
        return $this->getArrayCopy();
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return count($this) === 0;
    }
}
