<?php
namespace LightCloud\Uc\Exceptions;

use Ph\{
    Di, Log, Request, Response, App, FlashSession
};

class Handler
{
    public static function render(\Throwable $exception)
    {
        $errorMsg = $msg = $exception->getMessage();

        if(Request::isAjax() || Request::getBestAccept() == 'application/json') {
            $data = new \stdClass();
            if(($offset = \strpos($msg, "__DATA__")) !== false) {
                $errorMsg = \substr($msg, 0, $offset);
                $dataMsg = substr($msg, $offset+\strlen("__DATA__"));
                $data = json_decode($dataMsg, true);
            }
            $error = array(
                'errorCode' => max(1, $exception->getCode()),
                'errorMsg' => $errorMsg,
                'data' => $data??(new \stdClass()),
                'sessionId' => '',
            );
            Response::setContentType("application/json", "UTF-8");
            Response::setJsonContent($error, \JSON_UNESCAPED_UNICODE);   
        } else {
            FlashSession::error($exception->getMessage());
            Response::redirect(Request::getHTTPReferer());
            // Dispatcher::setParams([$exception]);
            // Dispatcher::forward([
            //     "controller" => "error",
            //     "action"     => "showUnknown"
            // ]);
            // Dispatcher::dispatch();
            // $response = App::engine()->exec('/error/showUnknown');
            // Di::setShard('response', $response);
        }
    }

    public static function report(\Throwable $exception)
    {
        Log::error(
            $exception->__toString()
        );
    }

    public static function catch(\Throwable $exception)
    {
        self::report($exception);
        self::render($exception);
    }
}