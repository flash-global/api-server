<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Action;


/**
 * Class RenderableActionInterface
 *
 * @package ObjectivePHP\Application\Action
 */
interface RenderableActionInterface
{
    /**
     * @return string
     */
    public function getViewTemplate();
}
