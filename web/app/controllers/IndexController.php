<?php
namespace ShBB\Web\Controllers;
use \PhalconPlus\Assert\Assertion as Assert;

class IndexController extends BaseController
{
    /**
     * 模板使用示例
     */
    public function indexAction()
    {
        $res = $this->rpc("\\ShBB\\Backend\\Services\\Dummy", "demo", ["foo" => "bar"]);
        var_dump($res->getResult());
        var_dump($this->di->getMyConfig());
        var_dump($this->di->getConfig());
        exit;
        echo "It works.";
        exit;
    }
}
