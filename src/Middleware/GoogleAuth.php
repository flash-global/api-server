<?php

namespace Fei\ApiServer\Middleware;

use ObjectivePHP\Application\Middleware\AbstractMiddleware;

/**
 * Class GoogleAuth
 *
 * @package Fei\Service\Mailer\Middleware
 */
class GoogleAuth extends AbstractMiddleware
{
    public function run()
    {
        if (!getenv('REMOTE_USER')) {
            header(
                'Location: ' .
                'https://accounts.google.com/o/saml2/initsso?idpid=C00mtquyv&spid=1023093070760&forceauthn=false'
            );
            exit();
        }
    }
}
