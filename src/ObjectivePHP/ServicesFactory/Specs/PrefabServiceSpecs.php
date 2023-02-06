<?php

namespace Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs;

use Fei\ApiServer\ObjectivePHP\Primitives\Collection\Collection;
use Fei\ApiServer\ObjectivePHP\ServicesFactory\Exception\Exception;

class PrefabServiceSpecs extends AbstractServiceSpecs
{
    /**
     * @var mixed Previously instantiated service (can be any type of value, not only objects)
     */
    protected $instance;

    /**
     * @param $id
     * @param mixed $instance
     */
    public function __construct($id, $instance)
    {
        parent::__construct($id);

        $this->setInstance($instance);
    }

    public static function factory($rawDefinition)
    {
        $rawDefinition = Collection::cast($rawDefinition);

        if (!$rawDefinition->has('instance')) {
            throw new Exception('Missing \'instance\' parameter', Exception::INCOMPLETE_SERVICE_SPECS);
        }

        $serviceDefinition = new PrefabServiceSpecs($rawDefinition['id'], $rawDefinition['instance']);

        return $serviceDefinition;
    }

    /**
     * @return mixed
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * @param mixed $instance
     *
     * @return $this
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;
        return $this;
    }
    
    protected function getAutoAlias()
    {
        if ($this->isAutoAliasingEnabled() && is_object($this->instance)) {
            return '\\' . ltrim(get_class($this->instance), '\\');
        } else {
            return null;
        }
    }
}
