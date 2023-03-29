<?php

namespace Tests\Fei\ApiServer\ObjectivePHP\DataProcessor;


use Fei\ApiServer\ObjectivePHP\DataProcessor\AbstractDataProcessor;
use Codeception\Test\Unit;
use Fei\ApiServer\ObjectivePHP\Primitives\String\Str;

class AbstractDataProcessorTest extends Unit
{
    public function testMessagesHandling()
    {

        $processor = $this->getMockForAbstractClass(AbstractDataProcessor::class);

        $processor->setMessage('test', 'test message');
        $this->assertEquals(new Str('test message'), $processor->getMessage('test'));

        // with placeholder
        $processor->setMessage('test', 'test :var');
        $this->assertEquals('test message', $processor->getMessage('test', ['var' => 'message']));
    }
}