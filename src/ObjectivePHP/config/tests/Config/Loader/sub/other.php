<?php

use Test\Fei\ApiServer\ObjectivePHP\Config\Loader\TestSingleValueDirective;

$config = 'test';

return [
    new TestSingleValueDirective('value')
];