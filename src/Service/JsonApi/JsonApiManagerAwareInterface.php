<?php

namespace Fei\ApiServer\Service\JsonApi;

/**
 * Interface JsonApiManagerAwareInterface
 *
 * @package Fei\ApiServer\Service\JsonApi
 */
interface JsonApiManagerAwareInterface
{
    /**
     * @param JsonApiManager $jsonApiManager
     *
     * @return mixed
     */
    public function setJsonApiManager(JsonApiManager $jsonApiManager);

    /**
     * @return JsonApiManager
     */
    public function getJsonApiManager() : JsonApiManager;
}
