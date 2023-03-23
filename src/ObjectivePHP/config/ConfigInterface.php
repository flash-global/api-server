<?php

namespace Fei\ApiServer\ObjectivePHP\Config;

use ObjectivePHP\Application\ApplicationInterface;

interface ConfigInterface
{
    public function get($key, $default = null);

    public function set($key, $value);

    public function import(DirectiveInterface $directive): ConfigInterface;

    public function setApplication(ApplicationInterface $app): ConfigInterface;

    public function getApplication(): ApplicationInterface;
}
