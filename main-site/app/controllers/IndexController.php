<?php
namespace Bull\MainSite\Controllers;
use function Bull\MainSite\getSiteConf;

class IndexController extends BaseController
{
    /**
     * 模板使用示例
     */
    public function indexAction()
    {
        $depends = getSiteConf()->get("depends");
        $this->view->setVar("depends", $depends);
    }
}