<?php
namespace LightCloud\Uc\Routes;
use Phalcon\Mvc\Router\Group as RouterGroup;

class Bare extends RouterGroup
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
        $this->add('/:controller/([a-zA-Z0-9_\-]+)/:params', array(
            'controller' => 1,
            'action'     => 2,
            'params'     => 3,
        ))->convert('action', function ($action) {
            return lcfirst(\Phalcon\Text::camelize($action)); // foo-bar -> fooBar
        });
    
        $this->add('/:controller', array(
            'controller' => 1,
            'action' => 'index',
        ));
    
        $this->add('/', array(
            'controller' => 'index',
            'action' => 'index',
        ));
    }
}
    