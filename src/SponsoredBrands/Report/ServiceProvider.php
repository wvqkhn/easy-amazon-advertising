<?php

namespace easyAmazonAdv\SponsoredBrands\Report;

use Pimple\ServiceProviderInterface;
use Pimple\Container;

/**
 * Class ServiceProvider
 * @package easyAmazonAdv\SponsoredProducts\Report
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-14 19:49
 */
class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['report'] = function ($app) {
            return new Client($app);
        };
    }
}
