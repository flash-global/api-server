<?php

namespace Tests\Fei\ApiServer\ObjectivePHP\Html\Message;

use Fei\ApiServer\ObjectivePHP\Html\Message\Alert;
use Fei\ApiServer\ObjectivePHP\Html\Message\Info;
use Fei\ApiServer\ObjectivePHP\Html\Message\MessageInterface;
use Fei\ApiServer\ObjectivePHP\Html\Message\MessageStack;
use Fei\ApiServer\ObjectivePHP\PHPUnit\TestCase;
use Fei\ApiServer\ObjectivePHP\Primitives\Collection\Validator\ObjectValidator;

class MessageStackTest extends TestCase
{

    public function testMessageStackInitialization()
    {
        $stack = new MessageStack();

        $this->assertCount(1, $stack->getValidators());
        $validator = $stack->getValidators()[0];
        $this->assertInstanceOf(ObjectValidator::class, $validator);
        $this->assertAttributeEquals(MessageInterface::class, 'class', $validator);
    }

    public function testMessageCounting()
    {
        $stack = new MessageStack();
        $stack[] = new Alert('test alert');
        $stack[] = new Alert('other test alert');
        $stack[] = new Info('test info');

        $this->assertCount(3, $stack);
        $this->assertEquals(2, $stack->count('danger'));
        $this->assertEquals(1, $stack->count('info'));
    }
}