<?php

namespace Test\Fei\ApiServer\ObjectivePHP\Message\Request\Parameter\Container;

use Fei\ApiServer\ObjectivePHP\Message\Request\HttpRequest;
use Fei\ApiServer\ObjectivePHP\Message\Request\Parameter\Container\HttpParameterContainer;
use Fei\ApiServer\ObjectivePHP\PHPUnit\TestCase;

class HttpParameterContainerTest extends TestCase
{
    public function testParametersAreExtractedFromEnvironment()
    {
        $GET['param1'] = 'value';
        $GET['param0 value'] = '';


        $request = $this->getMock(HttpRequest::class);
        $request->method('getGet')->willReturn($GET);

        $container = new HttpParameterContainer($request);

        $this->assertEquals('value', $container->get('param1'));
        $this->assertEquals('param0 value', $container->get(0));
    }
}