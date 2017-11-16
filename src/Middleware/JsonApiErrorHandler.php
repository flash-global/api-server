<?php

namespace Fei\ApiServer\Middleware;

use Fei\ApiServer\Api\ApiErrorHandler;
use ObjectivePHP\Application\ApplicationInterface;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Diactoros\Response\SapiEmitter;

/**
 * Class JsonApiErrorHandler
 *
 * @package Fei\ApiServer\Middleware
 */
class JsonApiErrorHandler extends ApiErrorHandler
{
    /**
     * @var string
     */
    protected $env;

    protected $debugEnvironments = ['dev', 'development'];

    /**
     * JsonApiErrorHandler constructor.
     * @param string $env
     * @param array $debugEnvironments
     */
    public function __construct($env = 'dev', $debugEnvironments = ['dev', 'development'])
    {
        $this->env = $env;
        $this->debugEnvironments = $debugEnvironments;
    }

    public function run(ApplicationInterface $app)
    {
        $e = $app->getException();

        if (preg_match('/Failed running hook "(.*)" of type:(.*)/', $e->getMessage()) && $e->getPrevious()) {
            $e = $e->getPrevious();
        }

        (new SapiEmitter())->emit(
            new JsonResponse(
                [
                    'errors' => $this->formatException($e)
                ],
                $this->getCode($e),
                [
                    'Content-Type' => 'application/vnd.api+json'
                ]
            )
        );
    }

    protected function formatException(\Throwable $throwable)
    {
        $error = [
            'status' => $this->getCode($throwable),
            'code' => $throwable->getCode(),
            'title' => $throwable->getMessage()
        ];

        if (in_array($this->env, $this->debugEnvironments)) {
            $error['meta'] = [
                'type' => get_class($throwable),
                'file' => $throwable->getFile(),
                'line' => $throwable->getLine(),
                'trace' => $throwable->getTraceAsString()
            ];
        }

        $errors = [$error];

        if ($throwable->getPrevious()) {
            $errors = array_merge($errors, $this->formatException($throwable->getPrevious()));
        }

        return $errors;
    }

    protected function getCode(\Throwable $throwable)
    {
        return $throwable->getCode() && $throwable->getCode() > 199 && $throwable->getCode() < 599
            ? $throwable->getCode()
            : 500;
    }
}
