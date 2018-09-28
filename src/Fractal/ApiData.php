<?php

namespace Fei\ApiServer\Fractal;


use Fei\Entity\EntityInterface;
use Fei\Entity\EntitySetInterface;
use Fei\Entity\PaginatedEntitySetInterface;
use Fei\ApiServer\Fractal\Paginator\CustomPaginatorAdapter;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use League\Fractal\Scope;
use League\Fractal\TransformerAbstract;

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
     * @param EntityInterface     $entity
     * @param TransformerAbstract $transformer
     *
     * @param null                $scope
     *
     * @return Scope
     */
    public function buildResource(EntityInterface $entity, TransformerAbstract $transformer, $scope = null)
    {
        $item = new Item($entity, $transformer);
        $item->setMetaValue('entity', get_class($entity));

        return $this->getManager()->createData($item, $scope);
    }


    /**
     * @param EntitySetInterface  $entitySet
     * @param TransformerAbstract $transformer
     *
     * @return Scope
     */
    public function buildResourceSet(EntitySetInterface $entitySet, TransformerAbstract $transformer, $scope = null)
    {
        $collection = new Collection($entitySet, $transformer);

        if ($entitySet instanceof PaginatedEntitySetInterface)
        {
            $paginator = CustomPaginatorAdapter::factory($entitySet);
            $collection->setPaginator($paginator);
        }
        if (!$entitySet->isEmpty()) {
            $collection->setMetaValue('entity', get_class($entitySet[0]));
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


}
