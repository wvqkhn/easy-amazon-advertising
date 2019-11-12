<?php


namespace easyAmazonAdv\BaseService;


use Pimple\Container;

class Application extends Container
{
    protected $providers = [
        Profiles\ServiceProvider::class,
        Portfolios\ServiceProvider::class,
        AccessToken\ServiceProvider::class,
    ];
}