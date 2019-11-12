<?php

namespace easyAmazonAdv\BaseService\Profiles;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client
 * @package easyAmazonAdv\BaseService\Profiles
 *
 * @author  baihe <baihe@guahao.com>
 * @date    2019-11-12 14:56
 */
class Client extends BaseClient
{
    /**
     * listProfiles
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 15:07
     */
    public function listProfiles()
    {
        return $this->httpGet('/profiles');
    }
}