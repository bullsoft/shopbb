<?php
namespace ShBB\Web\Controllers;
use PhalconPlus\Base\SimpleRequest as SimpleRequest;
use PhalconPlus\Base\SimpleResponse as SimpleResponse;

class BaseController extends \Phalcon\Mvc\Controller
{
    /**
     * @param string $name
     * @param string $method
     * @param array|object<\PhalconPlus\Base\SimpleRequest> $args
     */
    protected function rpc($name, $method, $args=[])
    {
        if(is_object($args) && $args instanceof SimpleRequest) {
            $request = $args;
        } elseif(is_array($args)) {
            $request = new SimpleRequest();
            if(!empty($args)) {
                $request->setParams($args);
            }
        } else {
            throw new \RuntimeException("The 3rd param of RPC should be either an array or an instance of <SimpleRequest>");
        }

        //$name = "\\Demo\\Server\\Services\\" . $name;
        $ret = $this->rpc->callByObject(array(
            "service" => $name,
            "method" => $method,
            "args"   => $request,
            "logId"  => $this->logger->getProcessorVar("logId"),
        ));
        $response = new SimpleResponse();

        if(is_array($ret)) {
            $response->softClone($ret);
        } else if(is_scalar($ret)) {
            $response->setItem($ret);
        } else {
            $response = $ret;
        }
        return $response;
    }
}
