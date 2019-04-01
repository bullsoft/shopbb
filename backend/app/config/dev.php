<?php
return array(
    'application' => array(
        "name"  => "backend",
        "ns"    => "ShBB\\Backend\\",
        "mode"  => "Srv",
        "staticUri" => "/",
        "url" => "http://srv.shopbb.dev.com:8083/",
        "logFilePath" => "/tmp/ShBB_backend.log",
    ),
    'db' => array(
        "host" => "127.0.0.1",
        "port" => 3306,
        "username" => "root",
        "password" => "Abc.123456",
        "dbname" => "shbb",
        "charset" => "utf8",
        "timeout" => 3, // 3 秒
        "retryInterval" => 200000, // 失败重试间隔200ms
        "retryTimes" => 5, //失败重试次数
    ),
    'redis' => [
        'host' => '127.0.0.1',
        'port' => 6379,
        'db'   => 1,
        'timeout' => 1,
    ],
);
