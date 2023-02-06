<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Middleware;

use Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface;
use Fei\ApiServer\ObjectivePHP\Invokable\Invokable;
use Fei\ApiServer\ObjectivePHP\Invokable\InvokableInterface;

/**
 * Class EmbeddedMiddleware
 *
 * @package ObjectivePHP\Application\Hook
 */
class EmbeddedMiddleware extends AbstractMiddleware
{

    /**
     * @var
     */
    protected $invokable;

    /**
     * EmbeddedMiddleware constructor.
     *
     * @param $invokable
     */
    public function __construct($invokable)
    {
        $this->invokable = Invokable::cast($invokable);
    }

    /**
     * @param ApplicationInterface $app
     *
     * @return mixed
     */
    public function run(ApplicationInterface $app)
    {
        $invokable = $this->getInvokable()->setApplication($app);

        return $invokable($app);
    }

    /**
     * @return InvokableInterface
     */
    public function getInvokable()
    {
        return $this->invokable;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return 'Middleware embedding ' . $this->getInvokable()->getDescription();
    }
}
