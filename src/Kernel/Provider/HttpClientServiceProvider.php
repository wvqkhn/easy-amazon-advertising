<?php


namespace easyAmazonAdv\Kernel\Provider;


use GuzzleHttp\Client;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class HttpClientServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['http_client'] = function ($app) {
            return new Client($app);
        };
    }
}