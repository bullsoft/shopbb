<?php
$app = (new PhalconPlus\Bootstrap(dirname(__DIR__)))->app();
$handler = new PhalconPlus\Rpc\Yar($di, "json");
$driver = new PhalconPlus\App\Driver\Srv($app, $handler);
$app->setDriver($driver);
echo $response->getContent();