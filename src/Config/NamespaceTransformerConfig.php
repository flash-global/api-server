<?php

namespace Fei\ApiServer\Config;

use ObjectivePHP\Config\SingleDirective;

/**
 * Class DefaultNamespaceTransformerConfig
 */
class NamespaceTransformerConfig extends SingleDirective
{
    /** @var  string */
    protected $namespace;

    /**
     * DefaultNamespaceTransformerConfig constructor.
     *
     * @param string $namespace
     */
    public function __construct($namespace)
    {
        $this->namespace = $namespace;
    }

    /**
     * Get Namespace
     *
     * @return string
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * Set Namespace
     *
     * @param string $namespace
     *
     * @return $this
     */
    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }
}
