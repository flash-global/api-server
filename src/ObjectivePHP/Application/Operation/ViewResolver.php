<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Operation;

use Fei\ApiServer\ObjectivePHP\Application\Action\RenderableActionInterface;
use Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface;
use Fei\ApiServer\ObjectivePHP\Application\Middleware\AbstractMiddleware;

/**
 * Class ViewResolver
 *
 * @package Fei\ApiServer\ObjectivePHP\Application\Task\Rta
 */
class ViewResolver extends AbstractMiddleware
{
    /**
     * @var ApplicationInterface
     */
    protected $application;

    /**
     * @param ApplicationInterface $app
     *
     * @return $this|mixed|null
     */
    public function run(ApplicationInterface $app)
    {
        $this->setApplication($app);

        $app->setParam('view.template', $this->getViewTemplate());
    }

    /**
     * @return mixed
     */
    public function getViewTemplate()
    {
        // get action
        $actionMiddleware = $this->getApplication()->getParam('runtime.action.middleware');

        $action = $actionMiddleware->getCallable($this->getApplication());

        if (!$action instanceof RenderableActionInterface) {
            return null;
        }

        return $action->getViewTemplate();
    }
}