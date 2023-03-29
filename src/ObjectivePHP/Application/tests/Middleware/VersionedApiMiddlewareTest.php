<?php

namespace Test\Fei\ApiServer\ObjectivePHP\Application\Middleware;

use Fei\ApiServer\ObjectivePHP\Application\Action\VersionedApiAction;
use Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface;
use Fei\ApiServer\ObjectivePHP\Application\Middleware\MiddlewareInterface;
use Fei\ApiServer\ObjectivePHP\Message\Request\HttpRequest;
use Fei\ApiServer\ObjectivePHP\Message\Request\Parameter\Container\HttpParameterContainer;
use Fei\ApiServer\ObjectivePHP\PHPUnit\TestCase;

class VersionnedApiMiddlewareTest extends TestCase
{

    public function testDefaultRouting()
    {

        $middleware = $this->getMockForAbstractClass(VersionedApiAction::class);
        $middleware->setApplication($this->getApplication());

        $version = $middleware->route();

        $this->assertEquals('1.0', $version);
    }


    public function testRouting()
    {

        $middleware = $this->getMockForAbstractClass(VersionedApiAction::class);
        $middleware->setApplication($this->getApplication(['version' => '2.0']));

        $version = $middleware->route();

        $this->assertEquals('2.0', $version);
    }

    public function testlistAvailableVersions()
    {
        $middleware = $this->getMockForAbstractClass(VersionedApiAction::class);

        $firstMiddleware = $this->createMock(MiddlewareInterface::class);
        $secondMiddleware = $this->createMock(MiddlewareInterface::class);

        $middleware->registerMiddleware('1.0', $firstMiddleware);
        $middleware->registerMiddleware('2.0', $secondMiddleware);

        $this->assertEquals(['1.0', '2.0'], $middleware->listAvailableVersions());
    }


    protected function getApplication($parameters = [])
    {
        $application = $this->createMock(ApplicationInterface::class);

        $request = $this->createMock(HttpRequest::class);
        $request->method('getGet')->willReturn($parameters);
        $request->method('getPost')->willReturn([]);


        $httpParameters = new HttpParameterContainer($request);
        $request->method('getParameters')->willReturn($httpParameters);

        $application->method('getRequest')->willReturn($request);

        return $application;
    }
}