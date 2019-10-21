<?php
namespace PhalconPlus\DevTools\Tasks;
use PhalconPlus\Base\SimpleRequest as SimpleRequest;
use PhalconPlus\Base\SimpleResponse as SimpleResponse;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local as LocalAdapter;

class RpcTask extends \Phalcon\CLI\Task
{
    public function callAction($argv)
    {
        global $version;
        if($version > 3) {
            $argv = func_get_args();
        }
        
        if(count($argv) < 3) {
            $this->cli->backgroundRed("请指定模块名称和Service名称！");
            exit(1);
        }
        $module = $argv[0];
        $filesystem = new Filesystem(new LocalAdapter(APP_ROOT_DIR));
        if (!$filesystem->has($module)) {
            $this->cli->backgroundRed("模块{$module}不存在，请更换名称再试！");
            exit(2);
        }

        $srvName = $argv[1];
        $method = $argv[2];

        $args = isset($argv[3])?json_decode($argv[3], true):[];

        if(json_last_error()) {
            $this->cli->backgroundRed("致命错误：参数不合法，不是合法的JSON字符串");
            exit(3);
        }

        $bootstrap = $this->di->getBootstrap();
        $bootstrap->dependModule($module);
        $moduleConfig = $bootstrap->getModuleDef($module)->getConfig();
        $ns = $moduleConfig->application->ns;
        $srvClassName = $ns . "Services\\" . $srvName;
        $realSrvClassName = $srvClassName ."Service";

        $this->cli->blue("====== RPC Target ======");
        $this->cli->text("{$realSrvClassName}::{$method}");

        // 开始RPC请求
        $methodRef = new \Zend\Code\Reflection\MethodReflection($realSrvClassName, $method);
        $params = $methodRef->getParameters();
        if(empty($params)) {
            $request = new SimpleRequest();
        } else {
            $paramClass = reset($params)->detectType();
            if(!is_null($paramClass)) {
                $request = new $paramClass();
            } else {
                $request = new SimpleRequest();
            }
            if(!empty($args)) {
                if(is_array($args)) {
                    $request->softClone($args);
                }
            }
        }
        $this->cli->blue("====== Request ======");
        var_export($request);
        $rpc = new \PhalconPlus\RPC\Client\Adapter\Local($this->di);
        try {
            $ret = $rpc->callByObject(array(
                "service" => $srvClassName,
                "method" => $method,
                "args"   => $request,
            ));
        } catch(\Exception $e) {
            $this->cli->br()->blue("====== Exception ======");
            $this->cli->text($e->getMessage());
            exit(6);
        }

        $response = new SimpleResponse();
        if(is_array($ret)) {
            $response->softClone($ret);
        } else if(is_scalar($ret)) {
            $response->setItem($ret);
        } else {
            $response = $ret;
        }
        $this->cli->br()->blue("====== Response ======");
        var_export($response);
    }
}
