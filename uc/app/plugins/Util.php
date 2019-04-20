<?php
namespace LightCloud\Uc\Plugins;

use Phalcon\Mvc\User\Plugin;

function getRandomCode()
{
    $rand = str_replace(".", "-", uniqid("lightcloud-", true));
    return $rand . '-' . rand(111111, 999999);
}

class Util extends Plugin
{
    public static function load()
    {
        return ;
    }
}
