namespace {{rootNs}};

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

        // load env from {$root}/.env
        if(\PhalconPlus\Enum\RunEnv::isInProd(APP_RUN_ENV)) {
            if(\file_exists(APP_ROOT_DIR.".env")) {
                $dotenv = \Dotenv\Dotenv::create(APP_ROOT_DIR);
                $dotenv->load();
            }
        }

        if($this->isPrimary()) {
            $di->set('myConfig', function() use($that) {
                return $that->getDef()->getConfig();
            });
        }

        if($this->isPrimary()) {
            $di->set('dispatcher', function() use ($di) {
                $dispatcher = new \Phalcon\Cli\Dispatcher();
                $dispatcher->setDefaultNamespace(__NAMESPACE__."\\Tasks\\");
                $dispatcher->setDefaultTask("help");
                return $dispatcher;
            });
        }
    }
}

