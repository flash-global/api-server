<?php
/**
 * ManagerAwareTraitTest.php
 *
 * @date        6/10/17
 * @file        ManagerAwareTraitTest.php
 */

namespace Tests\ApiServer\Fractal;

use Codeception\Test\Unit;
use Fei\ApiServer\Fractal\ManagerAwareTrait;
use League\Fractal\Manager;

/**
 * ManagerAwareTraitTest
 */
class ManagerAwareTraitTest extends Unit
{

    public function testGetSetManager()
    {
        $mockManagerTrait = $this->getMockForTrait(ManagerAwareTrait::class);
        
        $stubanager = new Manager();



        $this->assertSame($mockManagerTrait, $mockManagerTrait->setFractalManager($stubanager));
        $this->assertSame($stubanager, $mockManagerTrait->getFractalManager());

    }

}