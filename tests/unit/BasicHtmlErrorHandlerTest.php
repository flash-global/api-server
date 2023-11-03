<?php

namespace Tests\ApiServer;

use Codeception\Test\Unit;
use Fei\ApiServer\BasicHtmlErrorHandler;
use ObjectivePHP\Application\ApplicationInterface;
use Zend\Diactoros\Response\SapiEmitter;

/**
 * Class BasicHtmlErrorHandlerTest
 *
 * @package Tests\ApiServer
 */
class BasicHtmlErrorHandlerTest extends Unit
{

    public function testCode()
    {
        $emitterMock = $this->createMock(SapiEmitter::class);
        
        $errorHandler = new BasicHtmlErrorHandler($emitterMock);

        $app = $this->getMockBuilder(ApplicationInterface::class)->getMock();
        $app->expects($this->exactly(2))->method('getException')->willReturn(new \Exception("Exception."));
        $emitterMock->expects($this->once())->method('emit');

        $errorHandler($app);
    }
}
