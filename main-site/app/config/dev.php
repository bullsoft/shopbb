<?php
return array(
    'application' => array(
        "name"  => "main-site",
        "ns"    => "Bull\\MainSite\\",
        "mode"  => "Web",
        "staticUri" => "/",
        "url" => "http//server.localhost.com/",
        "logFilePath" => "/tmp/Bull_main-site.log",
    ),
    "logger" => array(
        array(
            "filePath" => "/tmp/Bull_main-site.log.de",
            "level" => \Phalcon\Logger::DEBUG
        ),
        array(
            "filePath" => "/tmp/Bull_main-site.log",
            "level" => \Phalcon\Logger::SPECIAL
        )
    ),
    "view" => array(
        "compiledPath"      => "/tmp/compiled/",
        "compiledExtension" => ".compiled",
    ),
    'db' => array(
        "host" => "127.0.0.1",        
        "port" => 3306,
        "username" => "root",
        "password" => "",
        "dbname" => "test",
        "charset" => "utf8",
        "timeout" => 3, // 3 秒
        "retryInterval" => 200000, // 失败重试间隔200ms
        "retryTimes" => 5, //失败重试次数
    ),
    'demoServerUrl' => array(
        "http://server.phalconplus.com",
    ),
    'debugRPC' => false,
);