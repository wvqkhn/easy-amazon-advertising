<?php

namespace easyAmazonAdv\SponsoredProducts\business;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['business'] = function ($app) {
            return new Client($app);
        };
    }


}