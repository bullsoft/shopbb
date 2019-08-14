<?php
$bootstrap = new \PhalconPlus\Bootstrap(dirname(__DIR__));

$req = \GuzzleHttp\Psr7\ServerRequest::fromGlobals();
$app = new \PhalconPlus\Mvc\PsrApplication(null, $req);
echo $bootstrap->setApp($app, true)
               ->exec()
               ->getBody();
