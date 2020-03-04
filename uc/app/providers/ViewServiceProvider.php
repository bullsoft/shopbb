<?php
namespace LightCloud\Uc\Providers;

use Phalcon\DiInterface;
use Phalcon\Di\ServiceProviderInterface;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use PhalconPlus\Volt\Extension\PhpFunction as VoltPhpFunction;
use Ph\{Config,};

class ViewServiceProvider implements ServiceProviderInterface
{
    public function register(DiInterface $di) : void
    {
        // set view with volt
        $di->setShared('view', function() {
            $view = new \Phalcon\Mvc\View();
            $view->setViewsDir(Config::path('view.dir'));
            $view->registerEngines(array(
                ".volt" => function($view, $di) {
                    $volt = new VoltEngine($view, $di);
                    $volt->setOptions(array(
                        "compiledPath"      => Config::path('view.compiledPath'),
                        "compiledExtension" => Config::path('view.compiledExtension'),
                    ));
                    // 如果模板缓存目录不存在，则创建它
                    if(!file_exists(Config::path('view.compiledPath'))) {
                        mkdir(Config::path('view.compiledPath'), 0777, true);
                    }
                    $compiler = $volt->getCompiler();
                    $ext = new VoltPhpFunction();
                    $ext->setCustNamespace("LightCloud\\Uc\\Plugins\\");
                    $compiler->addExtension($ext);
                    return $volt;
                }
            ));
            return $view;
        });
    }
}