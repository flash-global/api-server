<?php

namespace Fei\ApiServer\ObjectivePHP\Gateway\Hydrator;

interface DenormalizedDataExtractorInterface
{
    public function extractDenormalized($entity);

    public function denormalizeData(array $data): array;
}
