<?php

namespace Fei\ApiServer;

use ObjectivePHP\Application\ApplicationInterface;
use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\Response\SapiEmitter;
use Laminas\Diactoros\Stream;

/**
 * Class BasicHtmlErrorHandler
 *
 * @package Fei\ApiServer
 */
class BasicHtmlErrorHandler
{

    protected $emitter;

    public function __construct($emitter = null)
    {
        $this->emitter = $emitter ?: new SapiEmitter();
    }

    /**
     * @param ApplicationInterface $app
     */
    public function __invoke(ApplicationInterface $app)
    {
        $error = $app->getException()->getPrevious() ?: $app->getException();
        $code = $error->getCode() && $error->getCode() > 199 && $error->getCode() < 599 ? $error->getCode() : 500;

        $res = new HtmlResponse("", $code);

        // The stream is needed for writting a new body.
        $stream = new Stream("php://memory", 'rw');
        $stream->write($res->getReasonPhrase());

        $this->emitter->emit($res->withBody($stream));
    }
}
