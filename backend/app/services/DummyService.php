<?php
namespace ShBB\Backend\Services;
use PhalconPlus\Base\SimpleRequest as SimpleRequest;

class DummyService extends \PhalconPlus\Base\Service
{
    public function demo(SimpleRequest $request)
    {
    	return ["request" => $request->getParams()];
    }
}
