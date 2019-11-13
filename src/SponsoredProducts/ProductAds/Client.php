<?php

namespace easyAmazonAdv\SponsoredProducts\ProductAds;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <baihe@guahao.com>
 * @date    2019-11-12 17:08
 */
class Client extends BaseClient
{
    /**
     * getProductAd.
     *
     * @param int $adId
     *
     * @return array
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-14 00:47
     */
    public function getProductAd(int $adId)
    {
        return $this->httpGet('/sp/productAds/'.$adId);
    }

    /**
     * getProductAdEx.
     *
     * @param int $adId
     *
     * @return array
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-14 00:47
     */
    public function getProductAdEx(int $adId)
    {
        return $this->httpGet('/sp/productAds/extended/'.$adId);
    }

    /**
     * createProductAds.
     *
     * @param array $products
     *
     * @return array
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-14 00:47
     */
    public function createProductAds(array $products)
    {
        return $this->httpPost('/sp/productAds', $products);
    }

    /**
     * updateProductAds.
     *
     * @param array $products
     *
     * @return array
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-14 00:47
     */
    public function updateProductAds(array $products)
    {
        return $this->httpPut('/sp/productAds', $products);
    }

    /**
     * archiveProductAd.
     *
     * @param int $adId
     *
     * @return array
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-14 00:47
     */
    public function archiveProductAd(int $adId)
    {
        return $this->httpDelete('/sp/productAds/'.$adId);
    }

    /**
     * listProductAds.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-14 00:47
     */
    public function listProductAds(array $params = [])
    {
        return $this->httpGet('/sp/productAds', $params);
    }

    /**
     * listProductAdsEx.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-14 00:47
     */
    public function listProductAdsEx(array $params)
    {
        return $this->httpGet('/sp/productAds/extended', $params);
    }
}
