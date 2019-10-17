<?php
$di = new \Phalcon\DI\FactoryDefault();
$bootstrap = new \PhalconPlus\Bootstrap(dirname(__DIR__));
$app = new \PhalconPlus\Rpc\Yar($di);

$bootstrap->setDi($di);
$response = $bootstrap->initConf()
                      ->setApp($app, true)
                      ->execSrv();
echo $response->getContent();