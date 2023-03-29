<?php

namespace Tests\Fei\ApiServer\ObjectivePHP\DataProcessor;


use Fei\ApiServer\ObjectivePHP\DataProcessor\DataProcessingException;
use Fei\ApiServer\ObjectivePHP\DataProcessor\DateProcessor;
use Fei\ApiServer\ObjectivePHP\DataProcessor\StringProcessor;
use Fei\ApiServer\ObjectivePHP\PHPUnit\TestCase;
use Fei\ApiServer\ObjectivePHP\Primitives\String\Str;
use Codeception\Test\Unit;

class StringProcessorTest extends Unit
{
    public function testStringProcessing()
    {

        $stringProcessor = new StringProcessor();

        $processedString = $stringProcessor->process('this is a native string');

        $this->assertInstanceOf(Str::class, $processedString);

        $this->assertEquals('this is a native string', $processedString);
    }
}