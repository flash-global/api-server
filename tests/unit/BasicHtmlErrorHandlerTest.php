<?php

namespace Tests\ApiServer;

use Codeception\Test\Unit;
use Fei\ApiServer\BasicHtmlErrorHandler;
use ObjectivePHP\Application\AbstractApplication;
use ObjectivePHP\Application\ApplicationInterface;

/**
 * Created by OPCODING for Flash.
 * User: Neofox
 * Date: 08/11/2016
 * Time: 15:30
 */
class BasicHtmlErrorHandlerTest extends Unit
{

    public function testCode()
    {
        $errorHandler = new BasicHtmlErrorHandler();
        $app = $this->getMockBuilder(ApplicationInterface::class)->getMock();
        $app->expects($this->exactly(2))->method('getException')->willReturn(new \Exception("Exception."));

        $errorHandler->__invoke($app);


    }

}