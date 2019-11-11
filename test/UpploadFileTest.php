<?php

require_once '../vendor/autoload.php';

$config = [
    "clientId"     => "amzn1.application-oa2-client.73f214ad337a443ba7352d20bca891b1",
    "clientSecret" => "',
//    "refreshToken" => '',
    "region"       => "NA",
];

$app    = \easyAmazonAdv\Factory::SponsoredProducts($config);

//$result = $app->common->RefreshToken();
//var_dump($result);
//die();

//var_dump($app->common->listProfiles());


$app->common->profileId = '3753569985456409';
//var_dump($app->common->profileId);


//var_dump($app->common->listPortfolios());


//var_dump($app->common->getPortfolios('149317040707859'));

var_dump($app->common->getPortfoliosExtended('149317040707859'));
