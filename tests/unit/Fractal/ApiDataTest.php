<?php

namespace Tests\Fei\ApiServer\Fractal;


use Codeception\Test\Unit;
use Fei\ApiServer\Fractal\ApiData;
use Fei\Entity\AbstractEntity;
use ObjectivePHP\Gateway\Entity\EntityInterface;
use Fei\Entity\EntitySet;
use Fei\Entity\EntitySetInterface;
use Fei\Entity\PaginatedEntitySet;
use League\Fractal\Manager;
use League\Fractal\TransformerAbstract;

class ApiDataTest extends Unit
{
    public function testResourceBuilding()
    {
        $manager = new Manager();

        $apiData = (new ApiData())->setManager($manager);

        $entity = (new TestEntity())->setProp('test');

        $scope = $apiData->buildResource($entity, new TestTransformer());
        // var_dump($scope); exit;
        $this->assertEquals(TestEntity::class, $scope->toArray()['meta']['entity']);

        $this->assertCount(1, $scope->toArray()['data']);

    }

    public function testResourceSetBuilding()
    {
        $manager = new Manager();

        $apiData = (new ApiData())->setManager($manager);

        $entity = (new TestEntity())->setProp('test');
        $entity2 = (new TestEntity())->setProp('test2');

        $entitySet = new EntitySet([$entity, $entity2]);
        $scope = $apiData->buildResourceSet($entitySet, new TestTransformer());

        $this->assertEquals(TestEntity::class, $scope->toArray()['meta']['entity']);

        $this->assertCount(2, $scope->toArray()['data']);
    }

    public function testResourcePaginatedSetBuilding()
    {
        $_SERVER['HTTP_HOST'] = 'test';
        $_SERVER['REQUEST_URI'] = '/url';

        $manager = new Manager();

        $apiData = (new ApiData())->setManager($manager);

        $entity = (new TestEntity())->setProp('test');
        $entity2 = (new TestEntity())->setProp('test2');

        $entitySet = (new PaginatedEntitySet([$entity, $entity2]))->setTotal(12)->setCurrentPage(1)->setPerPage(10);
        $scope = $apiData->buildResourceSet($entitySet, new TestTransformer());

        $this->assertEquals(TestEntity::class, $scope->toArray()['meta']['entity']);

        $this->assertCount(2, $scope->toArray()['data']);
    }

}

// HELPERS

class TestEntity extends EntityInterface
{
    protected $prop;



    /**
     * @return mixed
     */
    public function getProp()
    {
        return $this->prop;
    }

    /**
     * @param mixed $prop
     */
    public function setProp($prop)
    {
        $this->prop = $prop;

        return $this;
    }

}

class TestTransformer extends TransformerAbstract
{
    public function transform($entity)
    {
        return [
            'prop' => $entity->getProp()
        ];
    }
}