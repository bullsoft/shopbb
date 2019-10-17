<?php
namespace LightCloud\Uc\Plugins;

function getRandomCode()
{
    $rand = str_replace(".", "-", uniqid("lightcloud-", true));
    return $rand . '-' . rand(111111, 999999);
}

class Util extends \Phalcon\Di\Injectable
{
    public static function load()
    {
        return ;
    }
}
