<?php
return array(
    'application' => array(
        "name"  => "cms-backend",
        "ns"    => "LightCloud\\CmsBackend\\",
        "mode"  => "Srv",
        "staticUri" => "/",
        "url" => "http//server.localhost.com/",
        "logFilePath" => "/tmp/LightCloud_cms-backend.log",
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
);