<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Workflow;

use Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface;
use Fei\ApiServer\ObjectivePHP\Application\Exception;
use Fei\ApiServer\ObjectivePHP\Application\Middleware\MiddlewareInterface;
use Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\FiltersHandler;
use Fei\ApiServer\ObjectivePHP\Invokable\Invokable;
use Fei\ApiServer\ObjectivePHP\Invokable\InvokableInterface;
use Fei\ApiServer\ObjectivePHP\Primitives\Collection\Collection;
use Fei\ApiServer\ObjectivePHP\ServicesFactory\ServiceReference;

/**
 * Class Hook
 *
 * @package Fei\ApiServer\ObjectivePHP\Application
 */
class Hook
{
    
    use FiltersHandler;
    
    /**
     * @var
     */
    protected $middleware;

    /**
     * @var Step
     */
    protected $step;

    /**
     * Hook constructor.
     *
     * @param MiddlewareInterface $middleware
     * @param array               $filters
     *
     */
    public function __construct(MiddlewareInterface $middleware, ...$filters)
    {
        $this->setMiddleware($middleware);
        $this->setFilters($filters);
    }

    /**
     * @param ApplicationInterface $app
     *
     * @return null
     * @throws Exception
     * @throws \Throwable
     */
    public function run(ApplicationInterface $app)
    {
        try {
            // filter call
            if (!$this->runFilters($app)) {
                return null;
            }
            $app->getEventsHandler()->trigger('application.workflow.hook.run', $this);

            $middleware = $this->getMiddleware();

            if ($middleware instanceof InvokableInterface) {
                $middleware->setApplication($app);
            }

            return $middleware($app);
        } catch (\Throwable $e) {
            if (!empty($middleware)) {
                throw new Exception('Failed running hook "' . $middleware->getReference() . '" of type: ' . $middleware->getDescription(), null, $e);
            } else {
                // propagate Exception
                throw $e;
            }
        }
    }

    /**
     * @return MiddlewareInterface
     */
    public function getMiddleware()
    {
        return $this->middleware;
    }

    /**
     * @param mixed $middleware
     *
     * @return $this
     */
    public function setMiddleware(MiddlewareInterface $middleware)
    {
        $this->middleware = $middleware;

        return $this;
    }


    /**
     * @return Step
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param Step $step
     *
     * @return $this
     */
    public function setStep($step)
    {
        $this->step = $step;

        return $this;
    }
}
