<?php


namespace easyAmazonAdv\SponsoredProducts\Common;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['common'] = function ($app) {
            return new Client($app);
        };
    }
}