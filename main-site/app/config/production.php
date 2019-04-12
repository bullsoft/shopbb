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
    "view" => array(
        "compiledPath"      => "/tmp/compiled/",
        "compiledExtension" => ".compiled",
    ),
);