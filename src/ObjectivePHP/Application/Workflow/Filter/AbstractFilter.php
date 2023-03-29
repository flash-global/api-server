<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter;

use Fei\ApiServer\ObjectivePHP\Invokable\AbstractInvokable;

/**
 * Class AbstractFilter
 *
 * @package Fei\ApiServer\ObjectivePHP\Application\Workflow
 */
abstract class AbstractFilter extends AbstractInvokable
{
    protected $filter;

    /**
     * RouteFilter constructor.
     *
     * @param $filter
     */
    public function __construct($filter)
    {
        $this->filter = $filter;
    }

    /**
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
}