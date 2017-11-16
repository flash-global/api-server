<?php

namespace Fei\ApiServer\Service\JsonApi;

/**
 * Trait JsonApiManagerAwareTrait
 *
 * @package Fei\ApiServer\Service\JsonApi
 */
trait JsonApiManagerAwareTrait
{
    /**
     * @var JsonApiManager
     */
    protected $jsonApiManager;

    /**
     * @return jsonApiManager
     */
    public function getJsonApiManager() : JsonApiManager
    {
        return $this->jsonApiManager;
    }

    /**
     * @param mixed $jsonApiManager
     *
     * @return $this
     */
    public function setJsonApiManager(JsonApiManager $jsonApiManager)
    {
        $this->jsonApiManager = $jsonApiManager;

        return $this;
    }
}
