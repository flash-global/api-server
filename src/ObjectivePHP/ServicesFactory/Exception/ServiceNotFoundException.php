<?php

namespace Fei\ApiServer\ObjectivePHP\ServicesFactory\Exception;

class ServiceNotFoundException extends Exception
{
    const UNREGISTERED_SERVICE_REFERENCE = 0x20;
}
