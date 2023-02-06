<?php

namespace Fei\ApiServer\ObjectivePHP\Gateway\ResultSet;

use Fei\ApiServer\ObjectivePHP\Gateway\Entity\EntityInterface;
use Fei\ApiServer\ObjectivePHP\Gateway\Exception\ResultSetException;

/**
 * Class EntitySet
 * @package Pricer\Entity
 */
class ResultSet extends \ArrayObject implements ResultSetInterface
{
    public function append($value)
    {
        if (!$value instanceof EntityInterface) {
            throw new ResultSetException('Only ' . EntityInterface::class . ' instances can be stored in ' . self::class);
        }

        parent::append($value); // TODO: Change the autogenerated stub
    }

    public function offsetSet($index, $value)
    {
        if (!$value instanceof EntityInterface) {
            throw new ResultSetException('Only ' . EntityInterface::class . ' instances can be stored in ' . self::class);
        }
        parent::offsetSet($index, $value);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->getArrayCopy();
    }

    public function isEmpty()
    {
        return count($this) === 0;
    }

    /**
     * @param EntityInterface[] ...$entities
     * @return ResultSetInterface
     */
    public function addEntities(EntityInterface ...$entities) : ResultSetInterface
    {
        /** @var EntityInterface $entity */
        foreach ($entities as $entity) {
            $this[$entity[$entity->getEntityIdentifier()]] = $entity;
        }

        return $this;
    }

    public function exchangeArray($entities)
    {
        foreach ($entities as $entity) {
            $this->append($entity);
        }
    }

    public function getTotal()
    {
        return count($this);
    }
}
