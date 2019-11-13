<?php

namespace easyAmazonAdv\BaseService\AccessToken;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider.
 *
 * @author  baihe <baihe@guahao.com>
 * @date    2019-11-12 14:59
 */
class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['accessToken'] = function ($app) {
            return new Client($app);
        };
    }
}
