<?php

namespace easyAmazonAdv\SponsoredDisplay\Campaigns;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['campaigns'] = function ($app) {
            return new Client($app);
        };
    }
}
