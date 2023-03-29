<?php

namespace Test\Fei\ApiServer\ObjectivePHP\Config;

use Fei\ApiServer\ObjectivePHP\Config\AbstractDirective;
use Fei\ApiServer\ObjectivePHP\Config\Config;
use Fei\ApiServer\ObjectivePHP\PHPUnit\TestCase;

class ConfigTest extends TestCase
{

    public function testDirectiveImport()
    {
        $config = new Config();

        $directive = $this->getMockForAbstractClass(AbstractDirective::class);

        $directive->expects($this->once())->method('mergeInto')->with($config);

        $config->import($directive);
    }

    public function testDirectiveGroupFetchingUsingMatcher()
    {
        $config = new Config();

        $config->set('x.y', 'a')->set('x.z', 'b');

        $this->assertEquals(['y' => 'a', 'z' => 'b'], $config->subset('x')->toArray());
    }
}