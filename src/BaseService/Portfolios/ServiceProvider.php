<?php

namespace easyAmazonAdv\BaseService\Portfolios;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider
 * @package easyAmazonAdv\BaseService\Portfolios
 *
 * @author  baihe <baihe@guahao.com>
 * @date    2019-11-12 14:59
 */
class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['portfolios'] = function ($app) {
            return new Client($app);
        };
    }
}