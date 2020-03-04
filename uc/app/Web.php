<?php
namespace LightCloud\Uc;

use GuzzleHttp\Psr7\ServerRequest;
use PhalconPlus\Enum\RunEnv;
use PhalconPlus\App\Module\AbstractModule as AppModule;
use PhalconPlus\Mvc\PsrApplication;
use PhalconPlus\App\Engine\Web as WebEngine;

use LightCloud\Uc\Providers\ServiceProvider;

use Ph\{Di, Config, App,};

if(!function_exists("getSiteConf")) {
    function getSiteConf()
    {
        static $siteConf = [];
        $siteConfPath = App::getModule()->getDir() . "/app/config/siteConf.php";
        if(empty($siteConf) && is_file($siteConfPath)) {
            $siteConf = include($siteConfPath);
        }
        return new \Phalcon\Config($siteConf);
    }
}

class Web extends AppModule
{
    public function registerAutoloaders()
    {
        Di::get('loader')->registerNamespaces([
            __NAMESPACE__.'\\Controllers'        => __DIR__.'/controllers/',
            __NAMESPACE__.'\\Controllers\\Apis'  => __DIR__.'/controllers/apis/',
            __NAMESPACE__.'\\Controllers\\OAuth' => __DIR__.'/controllers/oauth/',
            __NAMESPACE__.'\\Plugins'      => __DIR__.'/plugins/',
            __NAMESPACE__.'\\Exceptions'   => __DIR__.'/exceptions/',
            __NAMESPACE__.'\\Events'       => __DIR__.'/events/',
            __NAMESPACE__.'\\Routes'       => __DIR__.'/routes/',
            __NAMESPACE__.'\\Auth'         => __DIR__.'/auth/',
            __NAMESPACE__.'\\Models'       => $this->getDir().'/src/models/',
            __NAMESPACE__."\\Repositories" => $this->getDir().'/src/repositories/',
            __NAMESPACE__."\\Entities"     => $this->getDir().'/src/entities/',
            __NAMESPACE__."\\Providers"   => __DIR__.'/providers/',
            "LightCloud\\Com\\Protos\\Uc"  => APP_ROOT_COMMON_DIR.'/protos/Uc/',
            "PhalconPlus\\Com\\Protos"     => APP_ROOT_COMMON_DIR.'/protos/',
        ])->register(true);
    }

    public function registerServices()
    {
        $that = $this;
        // load env from {$root}/.env
        if(RunEnv::isInProd(APP_RUN_ENV)) {
            if(\file_exists(APP_ROOT_DIR.".env")) {
                $dotenv = \Dotenv\Dotenv::create(APP_ROOT_DIR);
                $dotenv->load();
            }
        }
        if($this->isPrimary()) {
            Di::set('myConfig', function() use($that) {
                return $that->config();
            });
        }
        Di::register(new ServiceProvider($this));
    }

    public function registerEvents()
    {
        if($this->isPrimary()) {
            // Attach Events
            (new \LightCloud\Uc\Events\Provider())->attach();
        }
    }

    public function registerEngine($request = null) : AppModule
    {
        if($this->isPrimary()) {
            $serverRequest = $request ?: ServerRequest::fromGlobals();
            $handler = new PsrApplication($serverRequest, $this->di());
            $custEngine = new WebEngine($this, $handler);
            $this->engine = $custEngine;
        }
        return $this;
    }
}
