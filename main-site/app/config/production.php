<?php
return array(
    'application' => array(
        "name"  => "main-site",
        "ns"    => "Bull\\MainSite\\",
        "mode"  => "Web",
        "staticUri" => "/",
        "url" => "https://www.bullsoft.org/",
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
);