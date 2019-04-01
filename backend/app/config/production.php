<?php
return array(
    'application' => array(
        "name"  => "backend",
        "ns"    => "ShBB\\Backend\\",
        "mode"  => "Srv",
        "staticUri" => "/",
        "url" => "http//server.localhost.com/",
        "logFilePath" => "/tmp/ShBB_backend.log",
    ),
    'db' => [
        "host" => "rds2yafurnqibun.mysql.rds.aliyuncs.com",
        "port" => 3306,
        "username" => getenv("PHP_MYSQL_USER_SHBB"),
        "password" => getenv("PHP_MYSQL_PASSWD_SHBB"),
        "dbname" => "shopbigbang",
        "charset" => "utf8",
        "timeout" => 3, // 3 秒
        "retryInterval" => 200000, // 失败重试间隔200ms
        "retryTimes" => 5, //失败重试次数
    ],
    'redis' => [
        'host' => 'redis-master.it.bullsoft.org',
        'port' => 6379,
        'auth' => getenv("PHP_REDIS_AUTH"),
        'db'   => 1,
        'timeout' => 1,
    ],
);
