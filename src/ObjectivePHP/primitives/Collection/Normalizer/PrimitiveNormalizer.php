<?php

namespace Fei\ApiServer\ObjectivePHP\Primitives\Collection\Normalizer;

use Fei\ApiServer\ObjectivePHP\Primitives\AbstractPrimitive;
use Fei\ApiServer\ObjectivePHP\Primitives\Exception;
use Fei\ApiServer\ObjectivePHP\Primitives\PrimitiveInterface;

/**
 * Class PrimitiveNormalizer
 * @package Fei\ApiServer\ObjectivePHP\Primitives\Collection\Normalizer
 */
class PrimitiveNormalizer extends ObjectNormalizer
{

    /**
     * @param $primitive
     * @throws Exception
     */
    public function __construct($primitive)
    {
        // set class name and checks it exists
        parent::__construct($primitive);

        // extract string from Str instance if needed
        $primitive = (string) $primitive;

        if (!AbstractPrimitive::isPrimitive($primitive)) {
            throw new Exception(sprintf('"%s" does not implements %s', $primitive, PrimitiveInterface::class), Exception::NORMALIZER_INCOMPATIBLE_CLASS);
        }
    }
}