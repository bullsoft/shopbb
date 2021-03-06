<?php
namespace LightCloud\Uc\Controllers;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use chillerlan\QRCode\{QRCode, QROptions};
use Enqueue\Redis\RedisConnectionFactory;
use Soluble\Japha\Bridge\Adapter as JBridgeAdapter;
use Soluble\Japha\Bridge\Exception as JBridgeException;

class IndexController extends BaseController
{
    public function initialize()
    {
        parent::initialize();
        $this->view->setVar("showSider", false);
    }
    /**
     * @disableGuest
     *
     */
    public function indexAction()
    {
        var_dump($this->dispatcher->getParam("ApiException"));
        var_dump($this->user);
        return;
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
        // Will build phrases of 5 characters, only digits
        $phraseBuilder = new PhraseBuilder(5);
        
        // Pass it as first argument of CaptchaBuilder, passing it the phrase
        // builder
        $captcha = new CaptchaBuilder(null, $phraseBuilder);
        $captcha->build();
       
        // 可以设置图片宽高及字体
        //$captcha->buildAgainstOCR(150, 40");

        $this->redis->setEx('phrase::'.session_id(), 300, $captcha->getPhrase());
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
        //exit;
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

    public function javabridgeAction()
    {
        $options = [     
            'servlet_address' => 'http://127.0.0.1:8888/MyJavaBridge/servlet.phpjavabridge'
        ];
        try {
            $ba = new JBridgeAdapter($options); 
            $hashMap = $ba->java('java.util.HashMap', [         
                                    'message' => 'Hello world',                 
                                    'value'   => $ba->java('java.math.BigInteger', PHP_INT_MAX)]);
            $hashMap->put('message', '你好，世界');
            echo $hashMap->get('message') . "<br />";   
            echo $hashMap->get('value'); 
        } catch (JBridgeException\ConnectionException $e) {  
            // Server is not reachable
            echo $e->getMessage();
        }
    }

    public function fileAction()
    {
        $response = new \Phalcon\Http\Response();
        $response->setFileToSend("/Users/weigang/Desktop/123.pdf", "123.pdf", true);
        return $response;
    }

    public function pdoAction()
    {
        $pdo = new \PhalconPlus\Db\Pdo\Mysql($this->config->db->toArray(), false);
        error_log(var_export($pdo->isUnderTransaction(), true));
        var_dump($pdo->describeColumns("test"));
        error_log(var_export($pdo->isUnderTransaction(), true));
    }

}
