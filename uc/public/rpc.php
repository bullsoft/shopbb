<?php
require_once(dirname(__DIR__)."/app/plugins/HarServer.php");
$bootstrap = new \PhalconPlus\Bootstrap(dirname(__DIR__));
$app = new LightCloud\Uc\Plugins\HarServer();
echo $bootstrap->setApp($app, true)
               ->execSrv()
               ->getContent();