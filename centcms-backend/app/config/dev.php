<?php
return array(
    'application' => array(
        "name"  => "centcms-backend",
        "ns"    => "LightCloud\CentCMS\Backend\\",
        "mode"  => "Srv",
        "staticUri" => "/",
        "url" => "http//server.localhost.com/",
        "logFilePath" => "/tmp/centcms-backend.log",
    ),
    'dbCms' => array(
        "host" => "127.0.0.1",        
        "port" => 3306,
        "username" => "root",
        "password" => "Abc.123456",
        "dbname" => "centcms",
        "charset" => "utf8",
        "timeout" => 3, // 3 秒
        "retryInterval" => 200000, // 失败重试间隔200ms
        "retryTimes" => 5, //失败重试次数
        "options" => [
            \PDO::ATTR_EMULATE_PREPARES => false
        ],
    ),
);