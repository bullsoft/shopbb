<?php
namespace LightCloud\Uc\Providers;

use Phalcon\DiInterface;
use Phalcon\Di\ServiceProviderInterface;
use Postmark\PostmarkClient;
use Ph\{Config,};

class MailServiceProvider implements ServiceProviderInterface
{
    public function register(DiInterface $di) : void
    {
        $di->setShared("mail", function() {
            return new PostmarkClient(Config::path("mail.token"));
        });
    }
}