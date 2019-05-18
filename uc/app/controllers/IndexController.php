<?php
namespace LightCloud\Uc\Controllers;
use Gregwar\Captcha\CaptchaBuilder;
use chillerlan\QRCode\{QRCode, QROptions};
use Enqueue\Redis\RedisConnectionFactory;

class IndexController extends BaseController
{
    public function initialize()
    {
        parent::initialize();
        $this->view->setVar("showSider", false);
    }
    /**
     * @disableGuest
     */
    public function indexAction()
    {

    }

    /**
     * @disableView
     */
    public function sendMailAction()
    {
        $sendResult = $this->mailer->test();
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

    public function queueAction()
    {
        $redisConfig = $this->config->get("redis")->toArray();
        // connect to Redis at example.com port 1000 using phpredis extension
        $queueConfig = $redisConfig;
        $queueConfig['scheme_extensions'] = ['phpredis'];
        $factory = new RedisConnectionFactory($queueConfig);
        $context = $factory->createContext();
        //$fooTopic = $context->createTopic('aTopic');
        //$message = $context->createMessage('Hello world!');
        //$context->createProducer()->send($fooTopic, $message);

        /** @var \Enqueue\Redis\RedisContext $context */
        $fooQueue = $context->createQueue('aQueue');
        $message = $context->createMessage('Hello world!' . date("Y-m-d H:i:s"));
        $context->createProducer()->send($fooQueue, $message);
    }

    public function receiveAction()
    {
        $redisConfig = $this->config->get("redis")->toArray();
        // connect to Redis at example.com port 1000 using phpredis extension
        $queueConfig = $redisConfig;
        $queueConfig['scheme_extensions'] = ['phpredis'];
        $factory = new RedisConnectionFactory($queueConfig);
        $context = $factory->createContext();
        /** @var \Enqueue\Redis\RedisContext $context */
        $fooQueue = $context->createQueue('aQueue');
        $consumer = $context->createConsumer($fooQueue);
        $message = $consumer->receive();
        var_dump($message);
    }
}