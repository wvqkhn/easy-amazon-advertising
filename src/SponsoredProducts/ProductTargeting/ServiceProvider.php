<?php

namespace easyAmazonAdv\SponsoredProducts\ProductTargeting;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['productTargeting'] = function ($app) {
            return new Client($app);
        };
    }
}
