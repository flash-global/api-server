<?php
    
    namespace Fei\ApiServer\Fractal;
    
    
    use Fei\ApiServer\Entity\EntityInterface;
    use Fei\ApiServer\Entity\EntitySetInterface;
    use Fei\ApiServer\Entity\PaginatedEntitySetInterface;
    use Fei\ApiServer\Fractal\Paginator\CustomPaginatorAdapter;
    use League\Fractal\Manager;
    use League\Fractal\Resource\Collection;
    use League\Fractal\Resource\Item;
    use League\Fractal\TransformerAbstract;
    use ObjectivePHP\ServicesFactory\Annotation\Inject;
    use ObjectivePHP\ServicesFactory\Specs\InjectionAnnotationProvider;

    /**
     * Class ApiData
     *
     * @package Fei\ApiServer
     */
    class ApiData implements InjectionAnnotationProvider
    {
        /**
         * @Inject(service="fractal.manager")
         * @var Manager
         */
        protected $manager;

        /**
         * @param EntityInterface     $entity
         * @param TransformerAbstract $transformer
         *
         * @param null                $scope
         *
         * @return Item
         */
        public function buildResource(EntityInterface $entity, TransformerAbstract $transformer, $scope = null)
        {
            $item = new Item($entity, $transformer);
            $item->setMetaValue('entity', get_class($entity));

            return $this->manager->createData($item, $scope);
        }


        /**
         * @param EntitySetInterface  $entitySet
         * @param TransformerAbstract $transformer
         *
         * @return Collection
         */
        public function buildResourceSet(EntitySetInterface $entitySet, TransformerAbstract $transformer, $scope = null)
        {
            $collection = new Collection($entitySet, $transformer);

            if ($entitySet instanceof PaginatedEntitySetInterface)
            {
                $paginator = CustomPaginatorAdapter::factory($entitySet);
                $collection->setPaginator($paginator);
            }

            // TODO find a way to handle meta per resource
            $collection->setMetaValue('entity', get_class($entitySet[0]));

            return $this->manager->createData($collection);
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
