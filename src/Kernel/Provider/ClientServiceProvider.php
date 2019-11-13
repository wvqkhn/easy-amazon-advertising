<?php


namespace easyAmazonAdv\Kernel\Provider;


use easyAmazonAdv\Kernel\Http\Client;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ClientServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['client'] = function ($app) {
            return new Client($app);
        };
    }
}