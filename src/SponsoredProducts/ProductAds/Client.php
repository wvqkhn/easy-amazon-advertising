<?php

namespace easyAmazonAdv\SponsoredProducts\ProductAds;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client
 * @package easyAmazonAdv\SponsoredProducts\ProductAds
 *
 * @author  baihe <baihe@guahao.com>
 * @date    2019-11-12 17:08
 */
class Client extends BaseClient
{
    /**
     * getProductAd
     * @param int $adId
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 17:11
     */
    public function getProductAd(int $adId)
    {
        return $this->httpGet('/sp/productAds/' . $adId);
    }

    public function getProductAdEx(int $adId)
    {
        return $this->httpGet('/sp/productAds/extended/' . $adId);
    }

    public function createProductAds(array $products)
    {
        return $this->httpPostJson('/sp/productAds', $products);
    }

    public function updateProductAds(array $products)
    {
        return $this->httpPut('/sp/productAds', $products);
    }

    public function archiveProductAd(int $adId)
    {
        return $this->httpDelete('/sp/productAds/' . $adId);
    }

    public function listProductAds(array $params = [])
    {
        return $this->httpGet('/sp/productAds' , $params);
    }

    public function listProductAdsEx(array $params)
    {
        return $this->httpGet('/sp/productAds/extended' , $params);
    }
}