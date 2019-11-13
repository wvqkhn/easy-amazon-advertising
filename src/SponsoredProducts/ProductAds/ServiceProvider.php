<?php

namespace easyAmazonAdv\SponsoredProducts\ProductAds;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['productAds'] = function ($app) {
            return new Client($app);
        };
    }
}
