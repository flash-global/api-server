<?php

namespace Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs;


use ObjectivePHP\ServicesFactory\Specs\AbstractServiceSpecs;

class UndefinedServiceSpecs extends AbstractServiceSpecs
{


    /**
     * @param       $id
     * @param array $params
     *
     */
    public function __construct($id, $params = [])
    {
        parent::__construct($id);

        $this->setParams($params);
    }

    static function factory($rawDefinition)
    {
        $id = $rawDefinition['id'];
        unset($rawDefinition['id']);
        $params = $rawDefinition;


        return new static($id, $params);
    }
}
