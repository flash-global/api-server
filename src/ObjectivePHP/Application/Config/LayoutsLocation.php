<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Config;

use Fei\ApiServer\ObjectivePHP\Config\StackDirective;
use Fei\ApiServer\ObjectivePHP\Config\StackedValuesDirective;

class LayoutsLocation extends StackedValuesDirective
{
    public function __construct($value)
    {
        // TODO check path existence

        parent::__construct($value);
    }
}