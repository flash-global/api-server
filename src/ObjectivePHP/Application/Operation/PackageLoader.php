<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Operation;

use Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface;

class PackageLoader
{
    public function __invoke(ApplicationInterface $application)
    {

        $appConfig = $application->getConfig();

        foreach ($appConfig->packages->registered as $packageClass) {
            $application->getStep('init')->plug($packageClass);
        }
    }
}