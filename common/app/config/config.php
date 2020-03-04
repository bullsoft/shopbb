<?php
// Visiable Variables
// $rootPath       -- dir of the app
// $di             -- global di container
// $config         -- the Phalcon\Config object
// $superapp       -- superapp object
// $loader         -- Phalcon\Loader object

return [
    'application' => [
        "name"  => "fp-devtool",
        "ns"    => "PhalconPlus\\DevTools\\",
        "mode"  => "Cli",
        "logFilePath" => "/tmp/fp-devtool.log",
    ],
    'version' => "1.0.8",
];

/* config.php ends here */