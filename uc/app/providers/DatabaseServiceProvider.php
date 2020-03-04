<?php
namespace LightCloud\Uc\Providers;

use Phalcon\DiInterface;
use Phalcon\Di\ServiceProviderInterface;
use Phalcon\Mvc\Model\Metadata\Memory as MetaData;

use Ph\{Config,};

class DatabaseServiceProvider implements ServiceProviderInterface
{
    public function register(DiInterface $di) : void
    {
        // register db write service
        $di->setShared('db', function() {
            $mysql = new \PhalconPlus\Db\Mysql($this, "db");
            return $mysql->getConnection();
        });

        // register db read service
        $di->setShared('dbRead', function() {
            $mysql = new \PhalconPlus\Db\Mysql($this, "db");
            return $mysql->getConnection();
        });

        $di->setShared('modelsMetadata', new MetaData());
    }
}