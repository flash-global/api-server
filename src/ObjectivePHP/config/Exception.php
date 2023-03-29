<?php

namespace Fei\ApiServer\ObjectivePHP\Config;

class Exception extends \Exception
{
    // common
    const FORBIDDEN_DIRECTIVE_NAME = 0x10;
    const FORBIDDEN_SECTION_NAME = 0x11;

    // loader related
    const INVALID_LOCATION = 0x20;
}