<?php

namespace Tests\Fei\ApiServer\ObjectivePHP\ServicesFactory;

use Fei\ApiServer\ObjectivePHP\PHPUnit\TestCase;
use Fei\ApiServer\ObjectivePHP\ServicesFactory\ServiceReference;

class ServiceReferenceTest extends TestCase
{

    public function testToStringImplementation()
    {
        $ref = new ServiceReference('test.service.id');

        $this->assertEquals('test.service.id', (string) $ref);
    }
}