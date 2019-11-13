<?php

namespace easyAmazonAdv\SponsoredProducts\Bidding;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['bidding'] = function ($app) {
            return new Client($app);
        };
    }
}
