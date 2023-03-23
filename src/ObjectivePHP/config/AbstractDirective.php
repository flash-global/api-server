<?php

namespace Fei\ApiServer\ObjectivePHP\Config;

use ObjectivePHP\Primitives\Merger\MergePolicy;

abstract class AbstractDirective implements DirectiveInterface
{
    /**
     * @var string Directive description
     */
    protected $description;

    /**
     * @var mixed Directive value
     */
    protected $value;

    /**
     * @var bool Tells how the mergeInto method should behave in case a identical directive has already been set
     */
    protected $mergePolicy = MergePolicy::AUTO;

    /**
     * @param $mergePolicy
     *
     * @return $this
     */
    public function setMergePolicy($mergePolicy)
    {
        $this->mergePolicy = $mergePolicy;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return (string) $this->description;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
