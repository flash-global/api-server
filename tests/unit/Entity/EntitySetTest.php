<?php
/**
 * Created by PhpStorm.
 * User: gauthier
 * Date: 30/06/2016
 * Time: 13:59
 */

namespace Tests\Fei\ApiServer\Entity;


use Codeception\Test\Unit;
use Fei\ApiServer\Entity\EntityInterface;
use Fei\ApiServer\Entity\EntitySet;

class EntitySetTest extends Unit
{

    public function testRecursiveArrayExport()
    {
        $entity = $this->createMock(EntityInterface::class);
        $entity->expects($this->once())->method('toArray')->willReturn(['x' => 'z']);
        
        $set = new EntitySet([$entity]);
        
        $this->assertEquals([['x' => 'z']], $set->toArray());

    }

    public function testSetCanTellIfItIsEmpty()
    {
        $set = new EntitySet();

        $this->assertTrue($set->isEmpty());

        $set[] = $this->createMock(EntityInterface::class);

        $this->assertFalse($set->isEmpty());
    }
}