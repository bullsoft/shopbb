<?php
namespace BullSoft\TuShare;
use PhalconPlus\Curl\Curl as HttpClient;
use BullSoft\TuShare\Params;

class Client
{
    public static $baseUrl = 'http://api.waditu.com';
    protected $token;
    protected $client;
    protected $body;

    public function __construct(string $token)
    { 
        $this->client = new HttpClient();
        $this->client->setDefaultOptions([
            \CURLOPT_TIMEOUT => 30,
            \CURLOPT_CONNECTTIMEOUT_MS => 3000,
        ]);
        $this->token = $token;
    }

    public function build(Params $params)
    {
        $this->body['token'] = $this->token;
        $this->body['api_name'] = $params->getApiName();
        $this->body['params'] = $params->getParams();
        $this->body['fields'] = $params->getFieldsAsString();
        return $this;
    }

    public function post()
    {
        $response = $this->client->jsonPost(self::$baseUrl, $this->body);
        if(is_object($response)) {
            if($response->statusCode == 200) {
                $body = json_decode($response->body, true);
                if($body['code'] != 0) {
                    throw new \Exception($body['msg']);
                }
                return $body['data'];
            }
        }
        throw new \Exception("请求挖地兔错误");
    }
}