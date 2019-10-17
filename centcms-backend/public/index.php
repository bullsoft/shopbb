<?php
$bootstrap = new \PhalconPlus\Bootstrap(dirname(__DIR__));
echo $bootstrap->exec()
               ->getContent();