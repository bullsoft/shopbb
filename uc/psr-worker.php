<?php
use Spiral\Goridge;
use Spiral\RoadRunner;

ini_set('display_errors', 'stderr');

$bootstrap = new \PhalconPlus\Bootstrap(__DIR__);

$worker = new RoadRunner\Worker(
    new Goridge\SocketRelay("rr.sock", null, Goridge\SocketRelay::SOCK_UNIX)
);

$psr7 = new RoadRunner\PSR7Client($worker);

while ($req = $psr7->acceptRequest()) {
    try {
        $app = new \PhalconPlus\Mvc\PsrApplication(null, $req);
        $resp = $bootstrap->setApp($app, true)->exec();
        $psr7->respond($resp);
        $bootstrap->terminate();
        unset($app, $req, $resp);
    } catch (\Throwable $e) {
        $psr7->getWorker()->error((string)$e);
    }
}