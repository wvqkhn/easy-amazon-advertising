<?php

require_once '../vendor/autoload.php';


$config = [
    'a'=>1231
];
$app = \easyAmazonAdv\Factory::SponsoredProducts($config);
var_dump($app->business->index());
$con = new \easyAmazonAdv\Kernel\Config();
var_dump($con->all());