<?php
namespace LightCloud\Uc\Controllers;

class IndexController extends BaseController
{
    /**
     * 模板使用示例
     */
    public function indexAction()
    {
        //$this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
    }

    /**
     * @disableView
     */
    public function sendMailAction()
    {
        // $sendResult = $this->mailClient->sendEmail(
        //     "no-reply@lightcloud.org",
        //     "guweigang@bullsoft.org",
        //     "Test",
        //     "Hello from Postmark!"
        // );
        $sendResult = $this->mailClient->sendEmailWithTemplate(
            "no-reply@lightcloud.org",
            "guweigang@bullsoft.org",
            "11065549",
            ["read_link" => "http://bullsoft.org"],
            true,
            "welcome_to_bullsoft"
        );
        var_dump($sendResult);
    }
}