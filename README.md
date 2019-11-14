### Synopsis


### Requirements
- PHP >= 7.2
- Composer
- guzzle 拓展
- pimple 拓展

### Installation
`composer require mystudytime/easy-amazon-advertising`

### 配置
```$php
use easyAmazonAdv\Factory;
$options =  [
            'clientId'     => 'your-client-id',
            'clientSecret' => 'your-secret-id',
            'refreshToken' => 'your-refresh-token',
//          'accessToken'  => "your-access-token",
            'region'       => 'NA',
        ];

$app = Factory::BaseService($options);
```

### 刷新 access token
```
$result = $app->access_token->refreshToken();

[
    'success'   => true,
    'code'      => 200,
    'response'  => [
        'access_token'  => 'access-token',
        'refresh_token' => 'refresh-token',
        'token_type'    => 'bearer',
        'expires_in'    => '3600',
    ],
    'requestId' => 1231
];
```

### 获取profiles
```
$result = $app->profiles->listProfiles();

[{
  "profileId":1234567890,
  "countryCode":"US",
  "currencyCode":"USD",
  "dailyBudget":10.00,
  "timezone":"America/Los_Angeles",
  "accountInfo":{
  "marketplaceStringId":"ABC123",
  "sellerStringId":"DEF456"
}]
```

### 设置 profileId
在开始调用业务 API 前，需要预先设置 profileId。
```
$app->client->profileId = 1234567890;
```

### 模块划分、业务名
- BaseService        基础通用服务
- SponsoredBrands    赞助品牌业务（缩写SBrands）
- SponsoredDisplay   赞助展示业务（缩写SDisplay）
- SponsoredProducts  赞助商品业务（缩写SProducts）

### BaseService 基础通用服务
#### access_token
- refreshToken

#### portfolios
- listPortfolios
- listPortfoliosEx
- getPortfolio
- getPortfolioEx
- createPortfolios
- updatePortfolios

#### profiles
- listProfiles
- getProfile
- updateProfiles

### SponsoredBrands 赞助品牌业务
#### report
- requestReport
- getReport
- downloadReportData


### SponsoredDisplay 赞助展示业务
#### campaigns
- getCampaign
- getCampaignEx
- createCampaigns
- updateCampaigns
- archiveCampaign
- listCampaigns
- listCampaignsEx

#### groups
- getAdGroup
- getAdGroupEx
- createAdGroups
- updateAdGroups
- archiveAdGroup
- listAdGroups
- listAdGroupsEx

### product_ads
- getProductAd
- getProductAdEx
- createProductAds
- updateProductAds
- archiveProductAd
- listProductAds
- listProductAdsEx

#### report
- requestReport
- getReport
- downloadReportData

### SponsoredProducts  赞助商品业务

#### bidding
- getAdGroupBidRecommendations
- getKeywordBidRecommendations
- createKeywordBidRecommendations
- getBidRecommendations

#### campaigns
- getCampaign
- getCampaignEx
- createCampaigns
- updateCampaigns
- archiveCampaign
- listCampaigns
- listCampaignsEx

#### groups
- getAdGroup
- getAdGroupEx
- createAdGroups
- updateAdGroups
- archiveAdGroup
- listAdGroups
- listAdGroupsEx

#### keywords


#### product_ads
- getProductAd
- getProductAdEx
- createProductAds
- updateProductAds
- archiveProductAd
- listProductAds
- listProductAdsEx

#### product_ads
- getProductAd
- getProductAdEx
- createProductAds
- updateProductAds
- archiveProductAd
- listProductAds
- listProductAdsEx

#### product_targeting
- getTargetingClause
- listTargetingClauses
- getTargetingClauseEx
- listTargetingClausesEx
- createTargetingClauses
- updateTargetingClauses
- createTargetRecommendations
- getTargetingCategories
- getRefinementsForCategory
- getBrandRecommendations

#### report
- requestReport
- getReport
- downloadReportData




