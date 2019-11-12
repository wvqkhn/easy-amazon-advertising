<?php

namespace easyAmazonAdv\BaseService\AccessToken;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client
 * @package easyAmazonAdv\BaseService\AccessToken
 *
 * @author  baihe <baihe@guahao.com>
 * @date    2019-11-12 14:56
 */
class Client extends BaseClient
{
    /**
     * RefreshToken
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 15:06
     */
    public function RefreshToken()
    {
        return $this->doRefreshToken();
    }
}