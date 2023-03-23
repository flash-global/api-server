<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter;

use ObjectivePHP\Application\ApplicationInterface;

class EnvFilter extends AbstractFilter
{
    /**
     * @param ApplicationInterface $app
     * @return bool
     */
    public function run(ApplicationInterface $app): bool
    {
        $env = (array) $this->getFilter();

        return in_array($app->getEnv(), $env);
    }
}
