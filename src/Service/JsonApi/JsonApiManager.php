<?php

namespace Fei\ApiServer\Service\JsonApi;

use Fei\ApiServer\Config\NamespaceTransformerConfig;
use Fei\ApiServer\Fractal\Paginator\CustomPaginatorAdapter;
use Fei\Entity\EntitySetInterface;
use Fei\Entity\PaginatedEntitySetInterface;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use League\Fractal\Scope;
use League\Fractal\Serializer\JsonApiSerializer;
use League\Fractal\TransformerAbstract;
use ObjectivePHP\Config\Config;
use ObjectivePHP\ServicesFactory\Annotation\Inject;
use ObjectivePHP\ServicesFactory\Specs\InjectionAnnotationProvider;

/**
 * Class JsonApiManager
 *
 * @package Fei\ApiServer\Service\JsonApi
 */
class JsonApiManager implements InjectionAnnotationProvider
{
    /**
     * @var Manager
     */
    protected $manager;

    /**
     * @var Config
     *
     * @Inject(service="config")
     */
    protected $config;

    /**
     * JsonApiManager constructor.
     */
    public function __construct()
    {
        $this->setManager((new Manager())->setSerializer(new JsonApiSerializer()));
    }

    /**
     * Get Manager
     *
     * @return Manager
     */
    public function getManager(): Manager
    {
        return $this->manager;
    }

    /**
     * Set Manager
     *
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
     * Return the JSON-API data transformed
     *
     * @param mixed $entity
     *
     * @return Scope
     */
    public function createData($entity)
    {
        $class = get_class($entity);

        return $this->getManager()->createData(new Item($entity, $this->getTransformer($class), $class));
    }

    /**
     * Return the JSON-API data collection transformed
     *
     * @param EntitySetInterface $entities
     *
     * @return Scope
     */
    public function createDataCollection(EntitySetInterface $entities)
    {
        if (!$entities->isEmpty()) {
            $class = get_class($entities[0]);

            $collection = (new Collection($entities, $this->getTransformer($class), $class));
            if ($entities instanceof PaginatedEntitySetInterface) {
                $collection->setPaginator(CustomPaginatorAdapter::factory($entities));
            }

            return $this->getManager()->createData($collection);
        }

        return $this->getManager()->createData(new Collection([]));
    }

    /**
     * @codeCoverageIgnore
     *
     * @param string $class
     *
     * @return TransformerAbstract
     */
    protected function getTransformer(string $class): TransformerAbstract
    {
        $transformer = null;
        $path = explode('\\', $class);
        $className = array_pop($path);
        $namespace = $this->config->get(NamespaceTransformerConfig::class)->getNamespace();
        $transformerClass = $namespace . '\\' . $className . 'Transformer';

        return new $transformerClass;
    }
}
