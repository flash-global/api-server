<?php

namespace Tests\ServicesFactory\Spec;

use Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\PrefabServiceSpecs;

class PrefabServicesSpecsTest extends \PHPUnit_Framework_TestCase
{
    public function testAutoAliasing()
    {
        $specs = new PrefabServiceSpecs('service.test', new \stdClass());
        $this->assertEquals(['\stdClass'], $specs->getAliases());

        $specs->disableAutoAliasing();
        $this->assertEquals([], $specs->getAliases());
    }
}