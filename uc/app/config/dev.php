<?php
// Visiable Variables
// $rootPath       -- dir of the app
// $di             -- global di container
// $config         -- the Phalcon\Config object
// $superapp       -- superapp object
// $loader         -- Phalcon\Loader object

$oneMonthInterval   = new \DateInterval('P1M');
$oneHourInterval    = new \DateInterval('PT1H');
$tenMinutesInterval = new \DateInterval('PT10M');

return array(
    'application' => array(
        "name"  => "uc",
        "ns"    => "LightCloud\\Uc\\",
        "mode"  => "Web",
        "staticUri" => "/",
        "url" => "http://127.0.0.1:8181",
        "logFilePath" => "/tmp/LightCloud_uc.log",
        "session" => [
            "cookie_name" => "identity"
        ],
        "roles" => [
            "Guests"    => [],
            "Customers" => ["Guests"],
            "Admin" => ["Guests", "Customers"],
            "Super" => ["Guests", "Customers", "Admin"],
        ],
    ),
    "view" => array(
        "dir" => dirname(__DIR__) . "/views_stisla/",
        "compiledPath"      => "/tmp/compiled/",
        "compiledExtension" => ".compiled",
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
        "encryptionKey"  => 'def000000f2a7b2d5146dc617e8e0cbcf9c5415f194c7a04c4eb4266c632e8484363bfd395117d54c8f7963d137eff918423f8830febea5fa2f7b3a75eb19f693cb8fa23',
        "privateKeyPath" => APP_MODULE_DIR . "/app/config/private.key",
        "publicKeyPath"  => APP_MODULE_DIR . "/app/config/public.key",
        'alwaysIncludeClientScopes' => false,
        'refreshTokenLifespan' => $oneMonthInterval,
        'accessTokenLifespan'  => $oneHourInterval,
        'authCodeLifespan'     => $oneHourInterval,
    ],
    "mail" => [
        "driver" => "postmark",
        "token" => \getenv("POSTMARK_API_TOKEN"),
    ],
    "session" => [
        "uniqueId"   => "lightcloud-uc-app",
        "host"       => "127.0.0.1",
        "port"       => 6379,
        "auth"       => "",
        "persistent" => false,
        "lifetime"   => 3600,
        "prefix"     => "my",
        "index"      => 0,
    ],
    "redis" => [
        'host' => "127.0.0.1",
        "port" => 6379
    ],
);

/* config.php ends here */