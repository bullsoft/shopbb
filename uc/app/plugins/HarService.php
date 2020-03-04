<?php
namespace LightCloud\Uc\Plugins;

class HarService extends \PhalconPlus\Base\Service
{
    public function demo(\PhalconPlus\Base\SimpleRequest $request)
    {
        $request->yes = "i do";
        return $request;
    }
}