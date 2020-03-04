<?php
namespace LightCloud\Uc\Providers;

use Phalcon\DiInterface;
use Phalcon\Di\ServiceProviderInterface;

use Ph\{Config, App, };

class RedisServiceProvider implements ServiceProviderInterface
{
    public function register(DiInterface $di) : void
    {
        $di->set('redis', function () {
            $redis = new \Redis();
            $redis->connect(Config::path("redis.host"), 
                            Config::path("redis.port"), 
                            1, NULL, 100);
            return $redis;
        });
    }
}