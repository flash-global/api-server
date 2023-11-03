<?php

namespace Fei\ApiServer\ObjectivePHP\Gateway;

use ObjectivePHP\Events\EventsHandler;
use ObjectivePHP\Events\EventsHandlerAwareInterface;
use ObjectivePHP\Events\EventsHandlerAwareTrait;
use ObjectivePHP\Gateway\Entity\Entity;
use ObjectivePHP\Gateway\Entity\EntityInterface;
use ObjectivePHP\Gateway\Exception\GatewayException;
use ObjectivePHP\Gateway\Projection\ProjectionInterface;
use Laminas\Hydrator\ArraySerializable;
use Laminas\Hydrator\ClassMethods;
use Laminas\Hydrator\HydratorInterface;
use Laminas\Hydrator\NamingStrategy\UnderscoreNamingStrategy;
use Laminas\Hydrator\NamingStrategyEnabledInterface;

/**
 * Class AbstractGateway
 *
 * @package Fei\ApiServer\Gateway
 */
abstract class AbstractGateway implements GatewayInterface, EventsHandlerAwareInterface
{
    use EventsHandlerAwareTrait;

    const FETCH_ENTITIES   = 1;
    const FETCH_PROJECTION = 2;

    /**
     * @var
     */
    const DEFAULT_ENTITY_CLASS = Entity::class;

    /**
     * @var string
     */
    protected $entityClass;

    /**
     * @var HydratorInterface
     */
    protected $hydrator;

    /**
     * @var string
     */
    protected $hydratorClass;

    /**
     * @var string
     */
    protected $defaultEntityCollection = EntityInterface::DEFAULT_ENTITY_COLLECTION;

    /**
     * @var int
     */
    protected $allowedMethods = self::ALL;

    /**
     * @var array
     */
    protected $delegatePersisters = array();

    /**
     * @var EventsHandler
     */
    protected $eventHandler;

    /**
     * @var array
     */
    protected $methodsMapping = array(
        'fetch'    => self::FETCH,
        'fetchOne' => self::FETCH_ONE,
        'fetchAll' => self::FETCH_ALL,
        'persist'  => self::PERSIST,
        'update'   => self::UPDATE,
        'delete'   => self::DELETE,
        'purge'    => self::PURGE
    );

    /**
     * Get EntityClass
     *
     * @return mixed
     */
    public function getEntityClass()
    {
        return $this->entityClass;
    }

    /**
     * @param $entityClass
     *
     * @return $this
     */
    public function setEntityClass($entityClass)
    {
        $this->entityClass = $entityClass;

        return $this;
    }

    public function can($method, ...$parameters): bool
    {
        // if method does not exist, simply return false
        if (!method_exists($this, $method)) {
            return false;
        }

        // look for a dedicated method to answer the question
        $canMethod = 'can' . ucfirst($method);
        if (method_exists($this, $canMethod)) {
            return $this->$canMethod(...$parameters);
        }

        // finally, fallback to the default behaviour: is the method standard and reported as allowed, or does
        // the method exists (for non-standard methods only)
        return (isset($this->methodsMapping[$method])) ? ($this->methodsMapping[$method] & $this->allowedMethods) : method_exists(
            $this,
            $method
        );
    }

    /**
     * @return int
     */
    public function getAllowedMethods(): int
    {
        return $this->allowedMethods;
    }

    /**
     * @param int $allowedMethods
     *
     * @return $this
     */
    public function setAllowedMethods(int $allowedMethods)
    {
        $this->allowedMethods = $allowedMethods;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultEntityClass()
    {
        return self::DEFAULT_ENTITY_CLASS;
    }

    /**
     * @param mixed $defaultEntityClass
     *
     * @return $this
     */
    public function setDefaultEntityClass($defaultEntityClass)
    {
        $this->defaultEntityClass = $defaultEntityClass;

        return $this;
    }

    /**
     * @return string
     */
    public function getHydratorClass(): string
    {
        return $this->hydratorClass;
    }

    /**
     * @param string $hydratorClass
     *
     * @return $this
     */
    public function setHydratorClass(string $hydratorClass)
    {
        $this->hydratorClass = $hydratorClass;

        return $this;
    }

    /**
     * @return array
     */
    public function getMethodsMapping(): array
    {
        return $this->methodsMapping;
    }

    /**
     * @param array $methodsMapping
     *
     * @return $this
     */
    public function setMethodsMapping(array $methodsMapping)
    {
        $this->methodsMapping = $methodsMapping;

        return $this;
    }

    /**
     * Get DefaultCollection
     *
     * @return string
     */
    public function getDefaultEntityCollection(): string
    {
        return $this->defaultEntityCollection;
    }

    /**
     * Set DefaultCollection
     *
     * @param string $defaultEntityCollection
     *
     * @return $this
     */
    public function setDefaultEntityCollection(string $defaultEntityCollection)
    {
        $this->defaultEntityCollection = $defaultEntityCollection;

        return $this;
    }

    public function registerDelegatePersister($property, $persister)
    {
        $this->delegatePersisters[$property] = $persister;
    }

    public function getDelegatePersisters()
    {
        return $this->delegatePersisters;
    }

    /**
     * @param $data
     *
     * @return array|ProjectionInterface
     *
     * @throws GatewayException
     */
    protected function entityFactory($data)
    {
        $entityClass = $this->entityClass ?? self::DEFAULT_ENTITY_CLASS;

        if (!$entityClass) {
            throw new GatewayException('No entity class provided.');
        }

        if (!class_exists($entityClass)) {
            throw new GatewayException(
                sprintf('Target entity class "%s" not found.', $entityClass),
                GatewayException::ENTITY_NOT_FOUND
            );
        }

        /** @var ProjectionInterface $entity */
        $entity = new $entityClass;

        if (!$entity instanceof EntityInterface) {
            throw new GatewayException(
                sprintf(
                    'Entity class "%s" does not implement "%s".',
                    $entityClass,
                    EntityInterface::class
                ),
                GatewayException::INVALID_ENTITY
            );
        }

        $this->getHydrator()->hydrate($data, $entity);

        return $entity;
    }

    /**
     * @return HydratorInterface
     */
    public function getHydrator(): HydratorInterface
    {
        if (is_null($this->hydrator)) {
            $entityClass = $this->entityClass ?? self::DEFAULT_ENTITY_CLASS;
            if ($entityClass != self::DEFAULT_ENTITY_CLASS) {
                $className = $this->hydratorClass ?: ClassMethods::class;
            } else {
                $className = ArraySerializable::class;
            }

            /** @var HydratorInterface $hydrator */
            $hydrator = new $className;
            if ($hydrator instanceof NamingStrategyEnabledInterface) {
                $hydrator->setNamingStrategy(new UnderscoreNamingStrategy());
            }

            $this->hydrator = $hydrator;
        }

        return $this->hydrator;
    }

    public function setHydrator(HydratorInterface $hydrator)
    {
        $this->hydrator = $hydrator;

        return $this;
    }
}
