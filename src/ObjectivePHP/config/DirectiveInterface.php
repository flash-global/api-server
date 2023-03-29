<?php

namespace Fei\ApiServer\ObjectivePHP\Config;

/**
 * Interface DirectiveInterface
 *
 * @package Fei\ApiServer\ObjectivePHP\Config
 */
interface DirectiveInterface
{

    /**
     * @param ConfigInterface $config
     *
     * @return DirectiveInterface
     */
    public function mergeInto(ConfigInterface $config): DirectiveInterface;
}
