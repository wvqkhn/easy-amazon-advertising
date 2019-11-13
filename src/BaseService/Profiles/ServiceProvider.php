<?php

namespace easyAmazonAdv\BaseService\Profiles;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider.
 *
 * @author  baihe <baihe@guahao.com>
 * @date    2019-11-12 14:58
 */
class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['profiles'] = function ($app) {
            return new Client($app);
        };
    }
}
