<?php
namespace LightCloud\Uc\Plugins;
use \PhalconPlus\Assert\Assertion;

class SendMail extends \Phalcon\Di\Injectable
{
    private $data  = [
        "product_name" => "轻量云用户中心", 
        "company_name" => "布尔软件",
        "company_address" => "北京市朝阳区霄云路"
    ];

    private $templates = [
        "welcome2Lightcloud" => [
            "tempalteId" => "11196862",
        ],
        "resetPassword" => [
            "templateId" => "835401",
        ],
    ];

    private $mailFrom = 'no-reply@lightcloud.org';

    public function __construct()
    {
        $this->data['login_url'] = $this->url->get("user/login", null ,true);
    }

    public function __call($name, $params) 
    {
        Assertion::notEmpty($params);
        Assertion::isString($params[0]);
        $mailTo = $params[0];
        $data = array_merge($this->data, $params[1]??[]);
        return $this->sendWithTemplate($mailTo, $data, $name);
    }

    public function test()
    {
         return  $this->mailClient->sendEmail(
            "no-reply@lightcloud.org",
            "guweigang@bullsoft.org",
            "测试邮件发送速度 - " . date("Y-m-d H:i:s"),
            "Hello from LightCloud!"
        );
    }

    private function sendText($to, $title, $body)
    {
        return $this->mailClient->sendEmail(
            $this->mailFrom,
            $to,
            $title,
            $body
        );
    }

    private function sendWithTemplate($to, $data, $tag)
    {
        return $this->mailClient->sendEmailWithTemplate(
            $this->mailFrom,
            $to,
            $this->templates[$tag]["templateId"], // templateId in PostMark
            $data,
            true,
            $tag // tag in PostMark
        );
    }
}