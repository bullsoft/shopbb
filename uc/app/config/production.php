<?php

 $oneMonthInterval = new \DateInterval('P1M');
 $oneHourInterval = new \DateInterval('PT1H');
 $tenMinutesInterval = new \DateInterval('PT10M');

return array(
    'application' => array(
        "name"  => "uc",
        "ns"    => "LightCloud\\Uc\\",
        "mode"  => "Web",
        "staticUri" => "/",
        "url" => "http://uc.bullsoft.org/",
        "logFilePath" => "/tmp/LightCloud_uc.log",
    ),
    "logger" => array(
        array(
            "filePath" => "/tmp/LightCloud_uc.log.de",
            "level" => \Phalcon\Logger::DEBUG
        ),
        array(
            "filePath" => "/tmp/LightCloud_uc.log",
            "level" => \Phalcon\Logger::SPECIAL
        )
    ),
    "view" => array(
        "compiledPath"      => "/tmp/compiled/",
        "compiledExtension" => ".compiled",
    ),
    'db' => array(
        "host" => \getenv("PHP_MYSQL_HOST"),        
        "port" => 3306,
        "username" => \getenv("PHP_UC_MYSQL_USERNAME"),
        "password" => \getenv("PHP_UC_MYSQL_PASSWORD"),
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
        "encryptionKey" => \getenv("PHP_UC_OAUTH2_ENC_KEY"),
        "privateKeyPath" => \getenv("PHP_UC_OAUTH2_PRI_KEY_PATH"),
        "publicKeyPath" => \getenv("PHP_UC_OAUTH2_PUB_KEY_PATH"),
        'alwaysIncludeClientScopes' => false,
        'refreshTokenLifespan' => $oneMonthInterval,
        'accessTokenLifespan' => $oneHourInterval,
        'authCodeLifespan' => $tenMinutesInterval,
    ],
    "mail" => [
        "driver" => "postmark",
        "token" => \getenv("PHP_POSTMARK_API_TOKEN"),
    ],
    "session" => [
        "uniqueId"   => "lightcloud-uc-app",
        "host"       => "node00-bullsoft",
        "port"       => 6379,
        "auth"       => "",
        "persistent" => false,
        "lifetime"   => 3600,
        "prefix"     => "my",
        "index"      => 1,
    ],
    "redis" => [
        'host' => "node00-bullsoft",
        "port" => 6379
    ],
);