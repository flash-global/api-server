<?php

namespace Tests\ApiServer;

use Codeception\Test\Unit;
use Fei\ApiServer\BasicHtmlErrorHandler;
use Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface;

/**
 * Class BasicHtmlErrorHandlerTest
 *
 * @package Tests\ApiServer
 */
class BasicHtmlErrorHandlerTest extends Unit
{

    public function testCode()
    {
        $errorHandler = new BasicHtmlErrorHandler();
        $app = $this->getMockBuilder(ApplicationInterface::class)->getMock();
        $app->expects($this->exactly(2))->method('getException')->willReturn(new \Exception("Exception."));

        $errorHandler($app);
    }
}