<?php

namespace Test\Fei\ApiServer\ObjectivePHP\Application\Workflow;

use Fei\ApiServer\ObjectivePHP\Application\Workflow\Hook;
use Fei\ApiServer\ObjectivePHP\Application\Workflow\Step;
use Fei\ApiServer\ObjectivePHP\PHPUnit\TestCase;

class StepTest extends TestCase
{
    /**
     * @throws \Fei\ApiServer\ObjectivePHP\Application\Exception
     * @throws \Fei\ApiServer\ObjectivePHP\Primitives\Exception
     */
    public function testAliasing()
    {

        $step = new Step('test');

        $step->plug($firstMiddleware = function () {
        })->as('first-middleware');

        /** @var Hook $embeddedMiddleware */
        $embeddedMiddleware = $step->get('first-middleware');
        $this->assertAttributeSame($firstMiddleware, 'operation', $embeddedMiddleware->getMiddleware()->getInvokable());

        $step->plug($secondMiddleware = function () {
        })->as('second-middleware');
        $step->plug($defaultSecondMiddleware = function () {
        })->asDefault('second-middleware');

        /** @var Hook $embeddedMiddleware */
        $embeddedMiddleware = $step->get('second-middleware');
        $this->assertAttributeSame($secondMiddleware, 'operation', $embeddedMiddleware->getMiddleware()->getInvokable());
    }
}