date_default_timezone_set('Asia/Shanghai');
ini_set("memory_limit", "4G");

$bootstrap = new \PhalconPlus\Bootstrap(dirname(__DIR__));
$di = new \Phalcon\DI\FactoryDefault\CLI();

$di->setShared('cli', function(){
    return new \League\CLImate\CLImate();
});

$arguments = array();
foreach($argv as $k => $arg) {
    if($k == 1) {
        $arguments['task'] = $arg;
    } elseif($k == 2) {
        $arguments['action'] = $arg;
    } elseif($k >= 3) {
        $arguments['params'][] = $arg;
    }
}

$bootstrap->execTask($arguments, $di);