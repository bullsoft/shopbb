<?php
namespace Bull\MainSite\Controllers;
use function Bull\MainSite\getSiteConf;

class ProjectController extends BaseController
{
    /**
     * 模板使用示例
     */
    public function indexAction()
    {
        $projName = $this->request->getQuery("name");
        $proj = getSiteConf()->projects->get($projName);
        if(!$proj) {
            throw new \Exception("项目不存在");
        }
        $this->view->setVar("proj", $proj);
    }

    public function fintechAction()
    {

    }
}