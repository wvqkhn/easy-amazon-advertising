<?php

namespace easyAmazonAdv\SponsoredProducts\ProductTargeting;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client
 * @package easyAmazonAdv\SponsoredProducts\ProductTargeting
 *
 * @author  baihe <baihe@guahao.com>
 * @date    2019-11-12 09:43
 */
class Client extends BaseClient
{
    /**
     * getTargetingClause
     *
     * @param string $targetId
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 09:46
     */
    public function getTargetingClause(string $targetId)
    {
        return $this->httpGet('/sp/targets/' . $targetId);
    }

    /**
     * listTargetingClauses
     * @param array $params
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 09:47
     */
    public function listTargetingClauses(array $params = [])
    {
        return $this->httpGet('/sp/targets', $params);
    }

    /**
     * getTargetingClauseEx
     * @param string $targetId
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 14:08
     */
    public function getTargetingClauseEx(string $targetId)
    {
        return $this->httpGet('/sp/targets/extended/' . $targetId);
    }

    /**
     * listTargetingClausesEx
     * @param array $params
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 14:08
     */
    public function listTargetingClausesEx(array $params = [])
    {
        return $this->httpGet('/sp/targets/extended', $params);
    }


    /**
     * createTargetingClauses 创建一个或多个目标
     * @param array $params
     *          'targetId:int'          =>  '目标id'
     *          'campaignId:int'        =>  '活动id'
     *          'adGroupId:int'         =>  '组id'
     *          'state:string'          =>  '状态["enabled", "paused", "archived"]'
     *          'expression:array'      =>  '扩展'
     *                  'type:string'   =>  ''
     *                  'value:string'  =>  ''
     *          'expressionType:int'    =>  '类型["auto", "manual"]'
     *          'bid:float'             =>  '广告出价'
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 14:11
     */
    public function createTargetingClauses(array $params)
    {
        return $this->httpPostJson('/sp/targets/extended', $params);
    }


    public function updateTargetingClauses(array $params)
    {
        //todo  put 待定重写
        return $this->httpPostJson('/sp/targets/extended', $params);
    }

    /**
     * createTargetRecommendations 根据传入的asins返回推荐产品列表
     *
     * @param array $asins
     * @param int $pageNumber
     * @param int $pageSize
     *
     * @return mixed
     *
     * @example {"recommendedProducts":[{"recommendedTargetAsin":"B01CO96K94"},{"recommendedTargetAsin":"B071KXCQY5"},{"recommendedTargetAsin":"B01AU6CQ5U"},{"recommendedTargetAsin":"B07HGTJMSY"},{"recommendedTargetAsin":"B007ZDVILK"},{"recommendedTargetAsin":"B07F83GXGD"},{"recommendedTargetAsin":"B07QKHT6Q2"},{"recommendedTargetAsin":"B01H2W0576"},{"recommendedTargetAsin":"B07KKD9XD8"},{"recommendedTargetAsin":"B07CQRRC8V"},{"recommendedTargetAsin":"B07PF84MFP"},{"recommendedTargetAsin":"B071XKMLBH"},{"recommendedTargetAsin":"B01LR20KWM"},{"recommendedTargetAsin":"B07HGSLDDL"},{"recommendedTargetAsin":"B07GQGWQ9M"},{"recommendedTargetAsin":"B076LDB351"},{"recommendedTargetAsin":"B00V6IWSB4"},{"recommendedTargetAsin":"B07STYH6Z9"},{"recommendedTargetAsin":"B07RFVNLMW"},{"recommendedTargetAsin":"B00JL52F4Y"},{"recommendedTargetAsin":"B07Q9QGHPJ"},{"recommendedTargetAsin":"B075DCTM29"},{"recommendedTargetAsin":"B072MF31YQ"},{"recommendedTargetAsin":"B07PLYGTRQ"},{"recommendedTargetAsin":"B07H3ZCH15"},{"recommendedTargetAsin":"B00ISGCAJM"},{"recommendedTargetAsin":"B07QTKPG2G"},{"recommendedTargetAsin":"B017IM1PYM"},{"recommendedTargetAsin":"B01AU6CPZQ"},{"recommendedTargetAsin":"B07TFS58GD"},{"recommendedTargetAsin":"B01BTDSNZ0"},{"recommendedTargetAsin":"B07GRKBMJC"},{"recommendedTargetAsin":"B074TFSH16"},{"recommendedTargetAsin":"B07P72Q1MX"},{"recommendedTargetAsin":"B07QPTR3CQ"},{"recommendedTargetAsin":"B07DJ66GSJ"},{"recommendedTargetAsin":"B07HH1LRTZ"},{"recommendedTargetAsin":"B07M5P3172"},{"recommendedTargetAsin":"B01AU6CPZG"},{"recommendedTargetAsin":"B01HRVABD0"},{"recommendedTargetAsin":"B00XKCYE3E"},{"recommendedTargetAsin":"B07PNMJR32"},{"recommendedTargetAsin":"B01AU6CPYW"},{"recommendedTargetAsin":"B07THL31NN"},{"recommendedTargetAsin":"B00TRACRYQ"},{"recommendedTargetAsin":"B01AU6CQK0"},{"recommendedTargetAsin":"B078QHT2KY"},{"recommendedTargetAsin":"B07K27GFH6"},{"recommendedTargetAsin":"B071H1HF55"},{"recommendedTargetAsin":"B07K57NQQH"}],"totalResultCount":235}
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 11:40
     */
    public function createTargetRecommendations(array $asins, int $pageNumber, int $pageSize = 50)
    {
        return $this->httpPostJson('/sp/targets/productRecommendations', compact('asins', 'pageNumber', 'pageSize'));
    }

    /**
     * getTargetingCategories 根据传入的ains返回推荐的分类列表
     *
     * @param array $asins
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @example [{"id":2335752011,"name":"Cell Phones & Accessories","path":"/Cell Phones & Accessories","isTargetable":true},{"id":2407774011,"name":"Cell Phone Cables","path":"/Cell Phones & Accessories/Cell Phone Accessories/Cell Phone Cables","isTargetable":true},{"id":2407755011,"name":"Cell Phone Accessories","path":"/Cell Phones & Accessories/Cell Phone Accessories","isTargetable":true}]
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 11:48
     */
    public function getTargetingCategories(array $asins)
    {
        return $this->httpGet('/sp/targets/categories', ['asins' => implode(',', $asins)]);
    }

    /**
     * getRefinementsForCategory 返回单个分类$categoryId对应的细化选项
     *
     * @param int $categoryId
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @example {"categoryId":2407755011,"brands":[{"id":20710054011,"name":"APPLE"},{"id":2528944011,"name":"Apple"},{"id":7637061011,"name":"amFilm"},{"id":19838852011,"name":"INIU"},{"id":2528919011,"name":"AmazonBasics"},{"id":20051359011,"name":"Spigen"},{"id":8886508011,"name":"Mpow"}],"ageRanges":[]}
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 11:52
     */
    public function getRefinementsForCategory(int $categoryId)
    {
        return $this->httpGet('/sp/targets/categories/refinements', ['categoryId' => $categoryId]);
    }

    /**
     * getBrandRecommendations 根据关键字或者分类id查询对应的推荐品牌
     *
     * @param string $type keyword categoryId
     * @param string $content
     * @return mixed
     * @throws \easyAmazonAdv\Kernel\Exceptions\HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 11:59
     */
    public function getBrandRecommendations(string $type, string $content)
    {
        $params = [$type => $content];
        return $this->httpGet('/sp/targets/brands', $params);
    }


}