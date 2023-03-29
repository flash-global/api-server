<?php

namespace Tests\Fei\ApiServer\ObjectivePHP\DataProcessor;


use Fei\ApiServer\ObjectivePHP\DataProcessor\DataProcessingException;
use Fei\ApiServer\ObjectivePHP\DataProcessor\DateProcessor;
use Codeception\Test\Unit;


class DateProcessorTest extends Unit
{
    public function testDateProcessing()
    {

        $date = '2008-11-28';

        $dateProcessor = new DateProcessor();

        $processedDate = $dateProcessor->process($date);

        $this->assertInstanceOf(\DateTime::class, $processedDate);

        $this->assertEquals('2008-11-28', $processedDate->format('Y-m-d'));
    }


    public function testDateProcessingWithFormatSpecifiedAtInstanciation()
    {

        $date = '28/11/2008';

        $dateProcessor = new DateProcessor('d/m/Y');

        $processedDate = $dateProcessor->process($date);

        $this->assertInstanceOf(\DateTime::class, $processedDate);

        $this->assertEquals('2008-11-28', $processedDate->format('Y-m-d'));
    }

    public function testDateProcessingWithFormatSpecifiedAtRuntime()
    {

        $date = '28/11/2008';

        $dateProcessor = new DateProcessor();

        $processedDate = $dateProcessor->process($date, 'd/m/Y');

        $this->assertInstanceOf(\DateTime::class, $processedDate);

        $this->assertEquals('2008-11-28', $processedDate->format('Y-m-d'));
    }
}