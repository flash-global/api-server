<?php
namespace Fei\ApiServer;

use ObjectivePHP\Application\ApplicationInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\SapiEmitter;
use Zend\Diactoros\Stream;

/**
 * Class BasicHtmlErrorHandler
 * @package Fei\ApiServer
 */
class BasicHtmlErrorHandler
{
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

        (new SapiEmitter())->emit($res->withBody($stream));
    }
}
