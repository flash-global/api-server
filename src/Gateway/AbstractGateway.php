<?php

namespace Fei\ApiServer\Gateway;
use Fei\ApiServer\Entity\EntityInterface;


/**
 * Class AbstractGateway
 * @package Fei\ApiServer\Gateway
 */
abstract class AbstractGateway
{

    /**
     * @var
     */
    protected $defaultTargetEntity;

    /**
     * @var
     */
    protected $targetEntity;
    /**
     * @var bool Tells whether new query results should be return as is
     */
    protected $returnRawResultForNextQuery = false;

    /**
     * @var array
     */
    private $validatedEntities = array();

    /**
     * @var
     */
    protected $cache;


    /**
     * @param $entity
     * @throws Exception
     */
    public function setTargetEntity($entity)
    {
        $this->targetEntity = $entity;

        return $this;
    }

    /**
     * @return AbstractMySqlGateway Flag the gateway to prevent it hydrating entities on next query
     */
    public function raw()
    {
        $this->returnRawResultForNextQuery = true;

        return $this;
    }


    /**
     * @param $data
     * @return EntityInterface|array
     */
    protected function entityFactory($data)
    {
        $targetEntityClass = $this->targetEntity ?: $this->defaultTargetEntity;

        if($this->returnRawResultForNextQuery || is_null($targetEntityClass))
        {
            $this->returnRawResultForNextQuery = false;
            return $data;
        }

        $this->validateEntityClass($targetEntityClass);

        /** @var EntityInterface $entity */
        $entity = new $targetEntityClass;
        $entity->hydrate($data);

        return $entity;
    }

    /**
     * @return $this
     * @throws Exception
     */
    protected function resetTargetEntity()
    {
        $this->targetEntity = $this->defaultTargetEntity;

        return $this;
    }

    /**
     * @param $entity
     * @return $this|bool
     * @throws Exception
     */
    protected function validateEntityClass($entity)
    {

        if(isset($this->validatedEntities[$entity])) return true;

        if(!class_exists($entity))
        {
            throw new Exception(sprintf('"%s" is not a valid entity class name', $entity));
        }

        if(!in_array('Fei\ApiServer\Entity\EntityInterface', class_implements($entity)))
        {
            throw new Exception(sprintf('Entity class "%s" does not implement "Fei\ApiServer\Entity\EntityInterface"', $entity));
        }

        $this->validatedEntities[] = $entity;

        return $this;
    }

    /**
     * @param $id
     * @return null
     */
    protected function loadFromCache($id)
    {
        return isset($this->cache[$id]) ? $this->cache[$id] : null;
    }

    /**
     * @param $id
     * @param $resultSet
     * @return $this
     */
    protected function storeInCache($id, $resultSet)
    {
        if($this->isResultCacheable($resultSet)) {
            $this->cache[$id] = $resultSet;
        }

        return $this;
    }

    protected function isResultCacheable($resultSet)
    {
        return (sizeof($resultSet) < 100);
    }
}