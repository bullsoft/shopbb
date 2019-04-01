<?php
return array(
    'application' => array(
        "name"  => "web",
        "ns"    => "ShBB\\Web\\",
        "mode"  => "Web",
        "staticUri" => "/",
        "url" => "http://www.shopbb.dev.com:8082/",
        "logFilePath" => "/tmp/ShBB_web.log",
    ),
    "view" => array(
        "compiledPath"      => "/tmp/compiled/",
        "compiledExtension" => ".compiled",
    ),
    'demoServerUrl' => array(
        "http://srv.shopbb.dev.com:8083",
    ),
    'debugRPC' => true,
);
