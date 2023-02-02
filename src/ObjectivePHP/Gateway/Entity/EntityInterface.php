<?php

namespace Fei\ApiServer\ObjectivePHP\Gateway\Entity;

interface EntityInterface extends \ArrayAccess
{
    const DEFAULT_ENTITY_COLLECTION = 'NONE';

    public function getEntityCollection() : string;

    public function getEntityIdentifier() : string;

    public function isNew() : bool;

    public function getEntityFields() : array;
}
