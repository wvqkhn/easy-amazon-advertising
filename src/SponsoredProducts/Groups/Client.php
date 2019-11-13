<?php

namespace easyAmazonAdv\SponsoredProducts\Groups;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client
 * @package easyAmazonAdv\SponsoredProducts\Groups
 *
 * @author  baihe <baihe@guahao.com>
 * @date    2019-11-12 17:50
 */
class Client extends BaseClient
{
    public function listAdGroups(array $params = [])
    {
        return $this->httpGet('/sp/adGroups/', $params);
    }
}