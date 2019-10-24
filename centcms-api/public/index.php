<?php
$bootstrap = new \PhalconPlus\Bootstrap(dirname(__DIR__));
$bootstrap->exec()
          //->setContentType("application/json", "UTF-8")
          ->send();