<?php

namespace easyAmazonAdv\SponsoredBrands\Groups;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['groups'] = function ($app) {
            return new Client($app);
        };
    }
}
