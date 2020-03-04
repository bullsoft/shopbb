<?php
namespace BullSoft;
use PhalconPlus\Curl\Curl as HttpClient;

class Juhe
{
    protected $client;

    public function __construct()
    {
        $this->client = new HttpClient();
        $this->client->setDefaultOptions([
            \CURLOPT_TIMEOUT => 3,
            \CURLOPT_CONNECTTIMEOUT_MS => 2000,
        ]);
    }

    public function get(string $apiUrl, array $params)
    {
        $url = $this->client->buildUrl($apiUrl, $params);
        $response = $this->client->get($url);

        if(is_object($response)) {
            if($response->statusCode == 200) {
                $body = json_decode($response->body, true);
                if($body['error_code'] != 0) {
                    throw new \Exception($body['reason']);
                }
                return $body['result'];
            }
        }
        throw new \Exception("请求聚合数据错误");
    }
}