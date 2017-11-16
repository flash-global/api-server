<?php

namespace Tests\Fei\ApiServer\JsonApi;

use Codeception\Util\Stub;
use Fei\ApiServer\Service\JsonApi\JsonApiManager;
use Fei\Entity\AbstractEntity;
use Fei\Entity\EntitySet;
use Fei\Entity\PaginatedEntitySet;
use League\Fractal\Manager;
use League\Fractal\Resource\Item;
use League\Fractal\Scope;
use League\Fractal\TransformerAbstract;
use PHPUnit\Framework\TestCase;

/**
 * Class JsonApiManagerTest
 *
 * @package Tests\Fei\ApiServer\Service\JsonApi
 */
class JsonApiManagerTest extends TestCase
{
    public function testCreateData()
    {
        $testClass = new TestClass();

        $scopeMock = $this->getMockBuilder(Scope::class)->disableOriginalConstructor()->getMock();

        /** @var JsonApiManager $jsonApiManager */
        $jsonApiManager = Stub::make(JsonApiManager::class, [
            'getTransformer' => new TestTransformerClass()
        ]);

        $managerMock = $this->getMockBuilder(Manager::class)->setMethods(['createData'])->getMock();
        $managerMock->expects($this->any())->method('createData')
            ->with(new Item($testClass, new TestTransformerClass(), TestClass::class))
            ->willReturn($scopeMock);

        $jsonApiManager->setManager($managerMock);

        $result = $jsonApiManager->createData($testClass);

        $this->assertEquals($scopeMock, $result);
    }

    public function testCreateDataCollection()
    {
        $testClass = new TestClass();
        $set = new EntitySet();
        $set->append($testClass);

        $scopeMock = $this->getMockBuilder(Scope::class)->disableOriginalConstructor()->getMock();
        /** @var JsonApiManager $jsonApiManager */
        $jsonApiManager = Stub::make(JsonApiManager::class, [
            'getTransformer' => new TestTransformerClass()
        ]);

        $managerMock = $this->getMockBuilder(Manager::class)->setMethods(['createData'])->getMock();
        $managerMock->expects($this->any())->method('createData')
            ->willReturn($scopeMock);

        $jsonApiManager->setManager($managerMock);
        
        $result = $jsonApiManager->createDataCollection($set);
        

        $this->assertEquals($scopeMock, $result);
    }

    public function testCreateDataCollectionEmpty()
    {
        $set = new EntitySet();

        $manager = new JsonApiManager();
        $result = $manager->createDataCollection($set);

        $this->assertEquals(
            [
                'data' => []
            ],
            json_decode($result->toJson(), true)
        );
    }

    public function testCreateDataCollectionPaginated()
    {
        $testClass = new TestClass();
        $set = (new PaginatedEntitySet())
            ->setCurrentPage(1)
            ->setTotal(1)
            ->setPerPage(10);

        $set->append($testClass);

        $managerMock = $this->getMockBuilder(Manager::class)
            ->setMethods(['createData'])
            ->getMock();

        $managerMock->expects($this->once())->method('createData')->willReturn([]);

        /** @var JsonApiManager $manager */
        $manager = Stub::make(JsonApiManager::class, [
            'getTransformer' => new TestTransformerClass()
        ]);
        $manager->setManager($managerMock);
        $result = $manager->createDataCollection($set);

        $attributes = (new TestTransformerClass())->transform($testClass);
        unset($attributes['id']);

        $this->assertEquals($result, []);
    }
}

class TestClass extends AbstractEntity
{
    protected $id;
    protected $recipient;
    protected $reference;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param $recipient
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

}

class TestTransformerClass extends TransformerAbstract
{
    /**
     * @param TestClass $test
     * @return array
     */
    public function transform($test)
    {
        return [
            'id'            => $test->getId(),
            'recipient'     => $test->getRecipient(),
            'reference'     => $test->getReference(),
        ];
    }
}
