<?php

namespace Test\Fei\ApiServer\ObjectivePHP\Config;

use Fei\ApiServer\ObjectivePHP\Config\ConfigReference;
use Fei\ApiServer\ObjectivePHP\PHPUnit\TestCase;

class ConfigReferenceTest extends TestCase
{
    public function testToStringImplementation()
    {
        $configRef = new ConfigReference('config-name');

        $this->assertEquals('config-name', (string) $configRef);
    }

    public function testgetId()
    {
        $configRef = new ConfigReference('config-name');

        $this->assertEquals('config-name', $configRef->getId());
    }
}