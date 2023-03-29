<?php

namespace Tests\Fei\ApiServer\ObjectivePHP\Events\Callback;

use Fei\ApiServer\ObjectivePHP\Events\Callback\AbstractCallback;
use Fei\ApiServer\ObjectivePHP\Events\Callback\CallbacksAggregate;
use Fei\ApiServer\ObjectivePHP\Events\Event;
use Fei\ApiServer\ObjectivePHP\Primitives\Collection\Collection;

class CallbacksAggregateTest extends \PHPUnit_Framework_TestCase
{
    public function testCallbacksAreSetUsingConstructorParametersList()
    {
        $aggregate = new CallbacksAggregate('aggregate', $lambda = function () {
        }, $otherLambda = function () {
        });

        $this->assertEquals(Collection::cast([$lambda, $otherLambda]), $aggregate->getCallbacks());
    }

    public function testCallbacksAreSetUsingAnArrayAsConstructorParam()
    {
        $aggregate = new CallbacksAggregate('aggreagate', [
            $lambda = function () {
            }, $otherLambda = function () {
        }
        ]);

        $this->assertEquals(Collection::cast([$lambda, $otherLambda]), $aggregate->getCallbacks());
    }
}