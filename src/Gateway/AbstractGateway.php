<?php

    namespace Fei\ApiServer\Gateway;

    use Fei\ApiServer\Entity\EntityInterface;


    /**
     * Class AbstractGateway
     *
     * @package Fei\ApiServer\Gateway
     */
    abstract class AbstractGateway
    {

        /**
         *
         */
        const CACHE_BY_DEFAULT = 'cache-by-default';
        /**
         *
         */
        const CACHE_ON_DEMAND = 'cache-on-demand';

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
        protected $rawDataForNextQuery = false;

        /**
         * @var
         */
        protected $cache;

        /**
         * @var array
         */
        protected $validatedEntities = array();


        /**
         * @var string
         */
        protected $cachingStrategy = self::CACHE_BY_DEFAULT;

        /**
         * @var mixed
         */
        protected $cacheNextQuery = null;

        /**
         * @param $entity
         *
         * @return $this
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
            $this->rawDataForNextQuery = true;

            return $this;
        }

        /**
         * @param $strategy
         *
         * @return $this
         * @throws Exception
         */
        public function setCachingStrategy($strategy)
        {
            if (!in_array($strategy, array(self::CACHE_BY_DEFAULT, self::CACHE_ON_DEMAND)))
            {
                throw new Exception('Invalid caching strategy');
            }

            $this->cachingStrategy = $strategy;

            return $this;

        }

        /**
         * @return $this
         */
        public function cache()
        {
            $this->cacheNextQuery = true;

            return $this;
        }

        /**
         * @return $this
         */
        public function dontCache()
        {
            $this->cacheNextQuery = false;

            return $this;
        }

        /**
         * @param $data
         *
         * @return EntityInterface|array
         */
        protected function entityFactory($data)
        {
            $targetEntityClass = $this->targetEntity ?: $this->defaultTargetEntity;

            if ($this->rawDataForNextQuery || is_null($targetEntityClass))
            {
                $this->rawDataForNextQuery = false;

                return $data;
            }

            $this->validateEntityClass($targetEntityClass);

            /** @var EntityInterface $entity */
            $entity = new $targetEntityClass;
            $entity->hydrate($data);

            return $entity;
        }

        /**
         * @param $entity
         *
         * @return $this|bool
         * @throws Exception
         */
        protected function validateEntityClass($entity)
        {

            if (isset($this->validatedEntities[$entity])) return true;

            if (!class_exists($entity))
            {
                throw new Exception(sprintf('"%s" is not a valid entity class name', $entity));
            }

            if (!in_array('Fei\ApiServer\Entity\EntityInterface', class_implements($entity)))
            {
                throw new Exception(sprintf('Entity class "%s" does not implement "Fei\ApiServer\Entity\EntityInterface"', $entity));
            }

            $this->validatedEntities[] = $entity;

            return $this;
        }

        

        /**
         * @param $id
         *
         * @return null
         */
        protected function loadFromCache($id)
        {
            return isset($this->cache[$id]) ? $this->cache[$id] : null;
        }

        /**
         * @param $id
         * @param $resultSet
         *
         * @return $this
         */
        protected function storeInCache($id, $resultSet)
        {
            if ($this->isResultCacheable($resultSet))
            {
                $this->cache[$id] = $resultSet;
            }

            return $this;
        }

        /**
         * @param $resultSet
         *
         * @return bool
         */
        protected function isResultCacheable($resultSet)
        {
            return (sizeof($resultSet) < 100);
        }

        /**
         *
         */
        protected function reset()
        {
            $this->cacheNextQuery      = null;
            $this->rawDataForNextQuery = false;
            $this->targetEntity        = $this->defaultTargetEntity;
        }

        /**
         * @return bool
         */
        protected function shouldCache()
        {
            return ($this->cachingStrategy == self::CACHE_BY_DEFAULT && !$this->cacheNextQuery === false)
            ||
            ($this->cachingStrategy == self::CACHE_ON_DEMAND && $this->cacheNextQuery === true);
        }
    }
