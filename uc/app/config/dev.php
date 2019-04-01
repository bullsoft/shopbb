<?php
return array(
    'application' => array(
        "name"  => "uc",
        "ns"    => "LightCloud\\Uc\\",
        "mode"  => "Web",
        "staticUri" => "/",
        "url" => "http//server.localhost.com/",
        "logFilePath" => "/tmp/LightCloud_uc.log",
    ),
    "view" => array(
        "compiledPath"      => "/tmp/compiled/",
        "compiledExtension" => ".compiled",
    ),
    'db' => array(
        "host" => "127.0.0.1",        
        "port" => 3306,
        "username" => "root",
        "password" => "Abc.123456",
        "dbname" => "uc",
        "charset" => "utf8",
        "timeout" => 3, // 3 秒
        "retryInterval" => 200000, // 失败重试间隔200ms
        "retryTimes" => 5, //失败重试次数
    ),
    'demoServerUrl' => array(
        "http://server.phalconplus.com",
    ),
    'debugRPC' => false,
    "oauth2" => [
        "encryptionKey" => 'def000000f2a7b2d5146dc617e8e0cbcf9c5415f194c7a04c4eb4266c632e8484363bfd395117d54c8f7963d137eff918423f8830febea5fa2f7b3a75eb19f693cb8fa23',
        "privateKeyPath" => APP_MODULE_DIR . "/app/config/private.key",
        "publicKeyPath" => APP_MODULE_DIR . "/app/config/public.key",
    ]
);