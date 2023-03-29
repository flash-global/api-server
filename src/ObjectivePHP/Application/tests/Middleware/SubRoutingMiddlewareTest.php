<?php

namespace Test\Fei\ApiServer\ObjectivePHP\Application\Middleware;

use Fei\ApiServer\ObjectivePHP\Application\Action\SubRoutingAction;
use Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface;
use Fei\ApiServer\ObjectivePHP\Application\Middleware\Exception;
use Fei\ApiServer\ObjectivePHP\Application\Middleware\MiddlewareInterface;
use Fei\ApiServer\ObjectivePHP\PHPUnit\TestCase;

class SubRoutingMiddlewareTest extends TestCase
{
    public function testMiddlewareStack()
    {

        /** @var SubRoutingAction $subRoutingMiddleware */
        $subRoutingMiddleware = $this->getMockForAbstractClass(SubRoutingAction::class);
        $subRoutingMiddleware->expects($this->once())->method('route')->willReturn('first');

        $app = $this->createMock(ApplicationInterface::class);

        $firstMiddleware = $this->createMock(MiddlewareInterface::class);
        $firstMiddleware->expects($this->once())->method('__invoke')->with($app);

        $subRoutingMiddleware->registerMiddleware('first', $firstMiddleware);

        $result = $subRoutingMiddleware->getMiddleware('first');

        $this->assertSame($firstMiddleware, $result);

        $subRoutingMiddleware($app);
    }

    public function testSubRoutingExecutionFailsIfNoMatchingMiddlewareIsRegistered()
    {
        /** @var SubRoutingAction $subRoutingMiddleware */
        $subRoutingMiddleware = $this->getMockForAbstractClass(SubRoutingAction::class);

        $subRoutingMiddleware->expects($this->once())->method('route');

        $this->expectsException(function () use ($subRoutingMiddleware) {
            $subRoutingMiddleware($this->getMockForAbstractClass(ApplicationInterface::class));
        }, Exception::class);
    }
}