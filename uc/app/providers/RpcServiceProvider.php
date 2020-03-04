<?php
namespace LightCloud\Uc\Providers;

use Phalcon\DiInterface;
use Phalcon\Di\ServiceProviderInterface;
use PhalconPlus\RPC\Client\Adapter\{
    Local as LocalRpc,
    Remote as RemoteRpc
};

use Ph\{Config, App, };

class RpcServiceProvider implements ServiceProviderInterface
{
    public function register(DiInterface $di) : void
    {
        $di->set("rpc", function() {
            $client = null;
            if(Config::get('debugRPC') == true) {
                App::dependModule("server"); // 可能需要修改
                $client = new LocalRpc($this);
            } else {
                $remoteUrls = Config::get('demoServerUrl');
                $client = new RemoteRpc($remoteUrls->toArray());
                $client->SetOpt(\YAR_OPT_CONNECT_TIMEOUT, 5);
            }
            return $client;
        });
    }
}