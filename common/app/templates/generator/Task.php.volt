namespace {{rootNs}}\{{moduleName}};

class Task extends \PhalconPlus\Base\AbstractModule
{
    public function registerAutoloaders()
    {
        $loader = new \Phalcon\Loader();
        $loader->registerNamespaces(array(
            __NAMESPACE__.'\\Tasks' => __DIR__.'/tasks/',
        ))->register();
    }

    public function registerServices()
    {
        // get di
        $di = $this->di;
        $di->set('dispatcher', function() use ($di) {
            $dispatcher = new \Phalcon\Cli\Dispatcher();
            $dispatcher->setDefaultNamespace(__NAMESPACE__."\\Tasks\\");
            $dispatcher->setDefaultTask("help");
            return $dispatcher;
        });
    }
}

