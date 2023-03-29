<?php

namespace Tests\Fei\ApiServer\ObjectivePHP\ServicesFactory\Builder;

use Helpers\DependencyService;
use Helpers\TestService;
use Fei\ApiServer\ObjectivePHP\PHPUnit\TestCase;
use Fei\ApiServer\ObjectivePHP\Primitives\Collection\Collection;
use Fei\ApiServer\ObjectivePHP\ServicesFactory\Builder\ClassServiceBuilder;
use Fei\ApiServer\ObjectivePHP\ServicesFactory\Exception\Exception;
use Fei\ApiServer\ObjectivePHP\ServicesFactory\ServicesFactory;
use Fei\ApiServer\ObjectivePHP\ServicesFactory\ServiceReference;
use Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\ClassServiceSpecs;

class PrefabServiceBuilderTest extends TestCase
{


    public function testBuildingUnsupportedServiceThrowsAnException()
    {
        $builder = new ClassServiceBuilder();

        $serviceDefinition = new ClassServiceSpecs('test.service', TestService::class);

        // change handled services definition
        $this->setObjectAttribute($builder, 'handledSpecs', ['Whatever']);

        $this->assertFalse($builder->doesHandle($serviceDefinition));

        $this->expectsException(function () use ($serviceDefinition, $builder) {
            $builder->build($serviceDefinition);
        }, Exception::class, null, Exception::INCOMPATIBLE_SERVICE_DEFINITION);
    }
}