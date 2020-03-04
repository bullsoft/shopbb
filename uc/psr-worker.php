<?php
use Spiral\Goridge;
use Spiral\RoadRunner;
use PhalconPlus\Http\PsrResponseFactory;

ini_set('display_errors', 'stderr');

$app = (new PhalconPlus\Bootstrap(__DIR__))->app();

$worker = new RoadRunner\Worker(
    new Goridge\SocketRelay("rr.sock", null, Goridge\SocketRelay::SOCK_UNIX)
);

$psr7 = new RoadRunner\PSR7Client($worker);

while ($req = $psr7->acceptRequest()) {
    try {
        $resp = $app->handle($req);
    } catch (\Throwable $e) {
        LightCloud\Uc\Exceptions\Handler::catch($e);
        $resp = $app->di()->get("response");
        // $psr7->getWorker()->error((string) $e);
    }
    $app->terminate();
    $psr7->respond(PsrResponseFactory::create($resp));
    unset($req, $resp);
}