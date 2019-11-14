<?php

namespace easyAmazonAdv\SponsoredProducts\Keywords;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 17:50
 */
class Client extends BaseClient
{
    /**
     * getCampaign.
     *
     * @param string $campaignId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:58
     */
    public function getCampaign(string $campaignId)
    {
        return $this->httpGet("/sp/campaigns/{$campaignId}");
    }

    /**
     * getCampaignEx.
     *
     * @param string $campaignId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:59
     */
    public function getCampaignEx(string $campaignId)
    {
        return $this->httpGet("/sp/campaigns/extended/{$campaignId}");
    }

    /**
     * createCampaigns.
     *
     * @param array $campaigns
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:59
     */
    public function createCampaigns(array $campaigns)
    {
        return $this->httpPost('/sp/campaigns', $campaigns);
    }

    /**
     * updateCampaigns.
     *
     * @param array $campaigns
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:59
     */
    public function updateCampaigns(array $campaigns)
    {
        return $this->httpPut('/sp/campaigns', $campaigns);
    }

    /**
     * archiveCampaign.
     *
     * @param string $campaignId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:59
     */
    public function archiveCampaign(string $campaignId)
    {
        return $this->httpDelete("/sp/campaigns/{$campaignId}");
    }

    /**
     * listCampaigns.
     *
     * @param array $campaigns
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:59
     */
    public function listCampaigns(array $campaigns)
    {
        return $this->httpGet('/sp/campaigns', $campaigns);
    }

    /**
     * listCampaignsEx.
     *
     * @param array $campaigns
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:59
     */
    public function listCampaignsEx(array $campaigns)
    {
        return $this->httpGet('/sp/campaigns/extended', $campaigns);
    }
}
