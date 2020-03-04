<?php
namespace LightCloud\Uc\Routes;
use Phalcon\Mvc\Router\Group as RouterGroup;

class Api extends RouterGroup
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(
            [
                'controller' => "index",
                'action' => "index",
                'namespace' => "LightCloud\\Uc\\Controllers\\Apis",
            ]
        );

        $this->setPrefix('/apis');

        $this->add('/:controller/([a-zA-Z0-9_\-]+)/:params', [
            'controller' => 1,
            'action'     => 2,
            'params'     => 3,
        ])->convert('action', function ($action) {
            return lcfirst(\Phalcon\Text::camelize($action));
        })->setName('api');

    }
}