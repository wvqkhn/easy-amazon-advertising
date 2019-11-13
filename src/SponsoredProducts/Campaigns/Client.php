<?php

namespace easyAmazonAdv\SponsoredProducts\Campaigns;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client
 * @package easyAmazonAdv\SponsoredProducts\Campaigns
 *
 * @author  baihe <baihe@guahao.com>
 * @date    2019-11-12 17:50
 */
class Client extends BaseClient
{
    public function listCampaigns(array $params = [])
    {
        return $this->httpGet('/sp/campaigns',$params);
    }
}