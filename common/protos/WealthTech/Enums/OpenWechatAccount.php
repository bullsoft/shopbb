<?php
namespace Common\Protos\WealthTech\Enums;

use \PhalconPlus\Enum\AbstractEnum;

//小程序使用的， 微信账户的枚举及相关方法
class OpenWechatAccount extends AbstractEnum
{
    const MINIPROGRAM = 'wx53b08cd2dff5e0bc';//乐多多小程序appId，主体是：


    //微信api秘钥的secret文件不放在代码库中，放在服务器指定目录下，wechat-app-secret-files目录下的appId.txt文件里面
    private static $appSecretFileMap = [
        self::MINIPROGRAM => 'wechat-key-files/'.self::MINIPROGRAM.".txt",//秘钥地址
    ]; //appId对应的appSecret

    private static $paymentConfigMap = [
        self::MINIPROGRAM => [
            'merchant_id' => '1531892551',
            'key'         => 'wechat-key-files/1531892551.txt',
            'cert_path'   => 'wechat-key-files/1531892551/apiclient_cert.pem',
            'key_path'    => 'wechat-key-files/1531892551/apiclient_key.pem',
        ],
        /* 配置格式 
        [
            'merchant_id' => '',
            'key' => '',
            'cert_path' => '',
            'key_path' => '',
        ]
        */
    ];

    protected static function getFileContent($fileName, $keyDir)
    {
        $file = rtrim($keyDir, '/').'/'.$fileName;
        if(file_exists($file)) {
            return trim(file_get_contents($file));
        }
        return '';
    }


    public static function getAppSecret($appId, $keyDir)
    {
        $fileName = isset(self::$appSecretFileMap[$appId]) ? self::$appSecretFileMap[$appId]:reset(self::$appSecretFileMap);
        if(empty($fileName)) {
            //如果未找到文件对应，返回空
            return '';
        }
        return self::getFileContent($fileName, $keyDir);
    }


    public static function getPaymentConfig($appId, $keyDir)
    {
        $config = isset(self::$paymentConfigMap[$appId]) ? self::$paymentConfigMap[$appId]:reset(self::$paymentConfigMap);
        if(empty($config)) {
            return [];
        }
        $returnConfig['merchant_id'] = isset($config['merchant_id']) ? $config['merchant_id']:'';
        $returnConfig['key'] = self::getFileContent($config['key'], $keyDir);
        if(!empty($config['cert_path'])) {
            $returnConfig['cert_path'] = rtrim($keyDir, '/').'/'.ltrim($config['cert_path'], '/');
        }
        if(!empty($config['key_path'])) {
            $returnConfig['key_path'] = rtrim($keyDir, '/').'/'.ltrim($config['key_path'], '/');
        }
        return $returnConfig;
    }

}
