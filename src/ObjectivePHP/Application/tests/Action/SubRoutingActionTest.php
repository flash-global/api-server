<?php

namespace Tests\Fei\ApiServer\ObjectivePHP\Application\Action;

use Fei\ApiServer\ObjectivePHP\Application\Action\SubRoutingAction;
use Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface;
use Fei\ApiServer\ObjectivePHP\Application\Middleware\AbstractMiddleware;
use Fei\ApiServer\ObjectivePHP\PHPUnit\TestCase;
use Fei\ApiServer\ObjectivePHP\ServicesFactory\ServicesFactory;

class SubRoutingActionTest extends TestCase
{
    public function testServicesFactoryIsCalledToInjectDependencies()
    {
        $middleware = $this->createMock(AbstractMiddleware::class);

        $servicesFactory = $this->createMock(ServicesFactory::class);
        $servicesFactory->expects($this->once())->method('injectDependencies')->with($middleware);

        $application = $this->createMock(ApplicationInterface::class);
        $application->method('getServicesFactory')->willReturn($servicesFactory);

        $subRoutingAction = $this->getMockBuilder(SubRoutingAction::class)->setMethods(['route', 'getMiddleware'])->getMockForAbstractClass();
        $subRoutingAction->expects($this->once())->method('route')->willReturn('test');
        $subRoutingAction->expects($this->once())->method('getMiddleware')->with('test')->willReturn($middleware);

        $subRoutingAction->__invoke($application);
    }
}