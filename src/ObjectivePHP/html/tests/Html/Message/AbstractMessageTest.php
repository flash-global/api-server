<?php

namespace Tests\Fei\ApiServer\ObjectivePHP\Html\Message;

use Fei\ApiServer\ObjectivePHP\Html\Message\Alert;
use Fei\ApiServer\ObjectivePHP\PHPUnit\TestCase;

class AbstractMessageTest extends TestCase
{

    public function testToStringImplementation()
    {
        $message = new Alert('test');

        $this->assertEquals('test', (string) $message);
    }
}