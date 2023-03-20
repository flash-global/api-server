<?php

namespace Fei\ApiServer\ObjectivePHP\Gateway\Projection;

interface ProjectionInterface
{

    /**
     * @return array
     */
    public function toArray();

    /**
     * @return bool
     */
    public function isEmpty();
}
