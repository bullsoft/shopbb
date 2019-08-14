<?php
namespace LightCloud\Uc\Plugins;
use Phalcon\DiInterface;
use PhalconPlus\Rpc\Server\AbstractServer as AbstractRpcServer;

class HarServer extends \Phalcon\Application
{
	protected $serviceObj = null;
	protected $args = null;

	public function __construct(DiInterface $di = null)
	{
		$body = file_get_contents("php://input");
		$this->args = msgpack_unpack($body);
	}

	public function handle()
	{
		$body = "";
		if(di()->getRequest()->isGet()) {
			$body =  "HarRpc Server.";
		} else if(di()->getRequest()->isPost()) {
			$return = [
				"errorCode" => 0,
				"errorMsg" => "",
				"logId" => di()->get("logger")->uid,
				"data" => [],
			];
			try {
				$this->serviceObj = $this->getDI()->get('backendSrv');
				$return['data'] = $this->serviceObj->callByObject($this->args);
			} catch(\Exception $e) {
				$return['errorCode'] = max($e->getCode(), 1);
				$return['errorMsg'] = $e->getMessage();
			}
			$body = msgpack_pack($return);
		}
		$response = new \Phalcon\Http\Response();
		$response->setStatusCode(200, "OK");
		$response->setContent($body);
		return $response;
	}
}