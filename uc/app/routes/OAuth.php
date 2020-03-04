<?php
namespace LightCloud\Uc\Routes;
use Phalcon\Mvc\Router\Group as RouterGroup;

class OAuth extends RouterGroup
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(
            [
                'controller' => "index",
                'action' => "index",
                'namespace' => "LightCloud\\Uc\\Controllers",
            ]
        );

        $this->setPrefix('/oauth');

        $this->add('/:controller', [
            'controller' => 1,
            'action'     => "index",
        ]);

        $this->add('/:controller/([a-zA-Z0-9_\-]*)/:params', [
            'controller' => 1,
            'action'     => 2,
            'params'     => 3,
        ])->convert('action', function ($action) {
            return lcfirst(\Phalcon\Text::camelize($action));
        });
    }
}