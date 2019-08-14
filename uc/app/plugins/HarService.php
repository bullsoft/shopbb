<?php

namespace LightCloud\Uc\Plugins;
use PhalconPlus\Rpc\Server\AbstractServer as AbstractRpcServer;

class HarService extends \PhalconPlus\Base\Service
{
    public function demo(\PhalconPlus\Base\SimpleRequest $request)
    {
        $request->yes = "i do";
        return $request;
    }
}