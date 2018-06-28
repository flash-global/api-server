<?php

namespace Tests\ApiServer\Fractal;

use Codeception\Test\Unit;
use Fei\ApiServer\Fractal\FractalManagerAwareTrait;
use League\Fractal\Manager;

/**
 * ManagerAwareTraitTest
 */
class ManagerAwareTraitTest extends Unit
{
    public function testGetSetManager()
    {
        $mockManagerTrait = $this->getMockForTrait(FractalManagerAwareTrait::class);

        $stubanager = new Manager();

        $this->assertSame($mockManagerTrait, $mockManagerTrait->setFractalManager($stubanager));
        $this->assertSame($stubanager, $mockManagerTrait->getFractalManager());
    }
}
