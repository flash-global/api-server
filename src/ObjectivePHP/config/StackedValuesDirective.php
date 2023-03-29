<?php

namespace Fei\ApiServer\ObjectivePHP\Config;

abstract class StackedValuesDirective extends AbstractDirective
{
    /**
     * @var bool
     */
    protected $mergePolicy = false;

    /**
     * SingleValueDirective constructor.
     *
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param ConfigInterface $config
     *
     * @return DirectiveInterface
     * @throws Exception
     */
    public function mergeInto(ConfigInterface $config): DirectiveInterface
    {
        $identifier = static::class;

        $currentValue = $this->mergePolicy ? [] : $config->get($identifier, []);

        $currentValue[] = $this->value;

        $config->set($identifier, $currentValue);

        return $this;
    }
}