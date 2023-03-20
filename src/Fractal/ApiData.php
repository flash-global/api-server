<?php

namespace Fei\ApiServer\Fractal;

use Fei\ApiServer\Fractal\Paginator\CustomPaginatorAdapter;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use League\Fractal\Scope;
use League\Fractal\TransformerAbstract;
use ObjectivePHP\Gateway\Entity\EntityInterface;
use ObjectivePHP\Gateway\ResultSet\PaginatedResultSetInterface;
use ObjectivePHP\Gateway\ResultSet\ResultSetInterface;

/**
 * Class ApiData
 *
 * @package Fei\ApiServer
 */
class ApiData
{
    /**
     * @var Manager
     */
    protected $manager;

    /**
     * @var string
     */
    protected $resourceKey = '';

    /**
     * @param EntityInterface     $entity
     * @param TransformerAbstract $transformer
     *
     * @param null                $scope
     *
     * @return Scope
     */
    public function buildResource(EntityInterface $entity, TransformerAbstract $transformer, $scope = null)
    {
        $item = new Item($entity, $transformer, $this->getResourceKey());
        $item->setMetaValue('entity', get_class($entity));

        return $this->getManager()->createData($item, $scope);
    }


    /**
     * @param ResultSetInterface|PaginatedResultSetInterface $entitySet
     * @param TransformerAbstract                            $transformer
     *
     * @return Scope
     */
    public function buildResourceSet(ResultSetInterface $entitySet, TransformerAbstract $transformer, $scope = null)
    {
        $collection = new Collection($entitySet, $transformer, $this->getResourceKey());

        if ($entitySet instanceof PaginatedResultSetInterface) {
            $paginator = CustomPaginatorAdapter::factory($entitySet);
            $collection->setPaginator($paginator);
        }

        // TODO find a way to handle meta per resource
        $entity = reset($entitySet);
        if ($entity) {
            $collection->setMetaValue('entity', get_class($entity));
        }

        return $this->getManager()->createData($collection);
    }

    /**
     * @return Manager
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @param Manager $manager
     *
     * @return $this
     */
    public function setManager(Manager $manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * @return string
     */
    public function getResourceKey()
    {
        return $this->resourceKey;
    }

    /**
     * @param string $resourceKey
     *
     * @return $this
     */
    public function setResourceKey($resourceKey)
    {
        $this->resourceKey = $resourceKey;

        return $this;
    }
}
