<?php

namespace Fei\ApiServer\Entity;


/**
 * Class EntitySet
 * @package Pricer\Entity
 */
class EntitySet extends \ArrayObject implements EntitySetInterface
{
    /**
     * @return array
     */
    public function toArray() : array
    {
        $set = array();

        foreach($this as $entity)
        {
            $set[] = $entity->toArray();
        }

        return $set;
    }

    public function isEmpty() : bool 
    {
        return !(bool) count($this);
    }

}
