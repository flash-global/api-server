<?php

namespace Tests\Fei\ApiServer\ObjectivePHP\Application\Action;

use Fei\ApiServer\ObjectivePHP\Application\Action\RenderableAction;
use Fei\ApiServer\ObjectivePHP\PHPUnit\TestCase;

class RenderableActionTest extends TestCase
{

    public function testViewNameAccessors()
    {
        $action = $this->getMockForAbstractClass(RenderableAction::class);
        $action->setViewTemplate('view/name');
        $this->assertEquals('view/name', $action->getViewTemplate());
    }
}