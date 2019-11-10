<?php

namespace easyAmazonAdv\SponsoredProducts\business;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    public function index()
    {
        var_dump($this->app['config']->get('a'));
        die();
    }
}