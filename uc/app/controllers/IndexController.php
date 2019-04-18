<?php
namespace LightCloud\Uc\Controllers;
use Gregwar\Captcha\CaptchaBuilder;
use chillerlan\QRCode\{QRCode, QROptions};

class IndexController extends BaseController
{
    /**
     * @disableGuest
     */
    public function indexAction()
    {
        echo "<h1>Hello, ".$this->user->username."</h1>";
        echo "<p>Your status: ".$this->user->status."</p>";
        echo "<h2>OAuth2 Code:</h2>";
        echo 'Code: <code style="word-wrap: break-word; word-break: break-all;"> ' .$this->request->get("code", "string", "Invalid Code")  . '</code>';
        exit;
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

    public function captchaAction()
    {
        $captcha = new CaptchaBuilder();
        $captcha->build();
        $this->redis->setEx('phrase::'.$this->session->getId(), 300, $captcha->getPhrase());
        $response = new \Phalcon\Http\Response();
        $response->setHeader('Content-Type', 'image/jpeg');
        $response->setContent($captcha->get());
        return $response;
    }

    public function qrcodeAction()
    {
        $data = "https://www.bullsoft.org";
        $options = new QROptions([
            'version'    => 5,
            'outputType' => QRCode::OUTPUT_MARKUP_SVG,
            'eccLevel'   => QRCode::ECC_L,
        ]);
        // invoke a fresh QRCode instance
        $qrcode = new QRCode($options);
        
        $response = new \Phalcon\Http\Response();
        $response->setHeader('Content-Type', 'image/svg+xml');
        $response->setContent($qrcode->render($data));
        return $response;
    }

    public function hashidAction()
    {
        echo $this->url->get(
            "user/login",
            ["a" => 1],
            true
        );
        exit;
    }
}