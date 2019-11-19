<?php

namespace easyAmazonAdv\SponsoredBrands\Keywords;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['keywords'] = function ($app) {
            return new Client($app);
        };
    }
}
