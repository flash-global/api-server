<?php

namespace Fei\ApiServer\Middleware;

use ObjectivePHP\Application\ApplicationInterface;
use ObjectivePHP\Application\Config\Param;
use ObjectivePHP\Application\Middleware\AbstractMiddleware;

/**
 * Class GoogleAuth
 *
 * @package Fei\Service\Mailer\Middleware
 */
class GoogleAuth extends AbstractMiddleware
{
    public function run(ApplicationInterface $app)
    {
        $spid = $app->getConfig()->subset(Param::class)->get('spid');

        if (!$spid) {
            throw new \LogicException(
                'SPID should not be empty. Please add `new Param(\'spid\', \'yourspid\')` in your configuration.'
            );
        }

        if (!getenv('REMOTE_USER')) {
            header(
                'Location: ' .
                'https://accounts.google.com/o/saml2/initsso?idpid=C00mtquyv&spid=' . $spid . '&forceauthn=false'
            );
            exit();
        }
    }
}
