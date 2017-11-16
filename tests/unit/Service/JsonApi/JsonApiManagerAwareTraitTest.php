<?php
namespace Tests\Fei\ApiServer\Service\JsonApi;

use Fei\ApiServer\Service\JsonApi\JsonApiManager;
use Fei\ApiServer\Service\JsonApi\JsonApiManagerAwareTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class JsonApiManagerAwareTraitTest
 * @package Fei\Service\Tests\Address\Manager
 */
class JsonApiManagerAwareTraitTest extends TestCase
{
    public function testAccessors()
    {
        $trait = $this->getObjectForTrait(JsonApiManagerAwareTrait::class);
        $trait->setJsonApiManager(new JsonApiManager());
        $this->assertEquals($trait->getJsonApiManager(), new JsonApiManager());
    }
}
