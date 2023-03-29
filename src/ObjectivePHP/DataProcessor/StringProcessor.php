<?php

namespace Fei\ApiServer\ObjectivePHP\DataProcessor;

use Fei\ApiServer\ObjectivePHP\Primitives\String\Str;

class StringProcessor extends AbstractDataProcessor
{
    /**
     * @param $value
     *
     * @return int
     */
    public function process($value)
    {
        return Str::cast($value);
    }
}