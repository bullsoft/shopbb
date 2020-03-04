<?php
use PhalconPlus\Bootstrap;

try {
    $app = (new Bootstrap(dirname(__DIR__)))->app();
    $response = $app->handle();
} catch(Throwable $e) {
    LightCloud\Uc\Exceptions\Handler::catch($e);
    if(isset($app)) {
        $response = $app->di()->get("response");
    } else {
        throw $e;
    }
}
// var_dump($response);exit;
$response->send();
$app->terminate();
