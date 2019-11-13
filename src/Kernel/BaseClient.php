<?php

namespace easyAmazonAdv\Kernel;

use easyAmazonAdv\Kernel\Exceptions\HttpException;
use easyAmazonAdv\Kernel\Exceptions\InvalidArgumentException;
use easyAmazonAdv\Kernel\Exceptions\InvalidConfigException;
use easyAmazonAdv\Kernel\Http\Client;

class BaseClient
{
    protected $app;

    protected $client;

    protected static $apiEndpoints = [
        'NA' => 'https://advertising-api.amazon.com',
        'EU' => 'https://advertising-api-eu.amazon.com',
        'FE' => 'https://advertising-api-fe.amazon.com',
    ];

    public $config;

    protected static $apiVersion = 'v2';

    protected static $apiTokenUrl = 'https://api.amazon.com/auth/o2/token';

    public $apiEndpoint;

    public $profileId;

    public function __construct($app)
    {
        $this->app    = $app;
        $this->config = $app['config']->toArray();
        $this->setEndpoint($this->config['region']);
        $this->validateConfigParameters($this->config);
        if (isset($app['client']->profileId) && !empty($app['client']->profileId)) {
            $this->profileId = $app['client']->profileId;
        }
        if (empty($this->config["accessToken"]) && !empty($this->config["refreshToken"])) {
            $this->doRefreshToken();
        }
    }

    /**
     * validateConfigParameters
     *
     * @param $config
     * @return bool
     * @throws InvalidArgumentException
     * @throws InvalidConfigException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-10 22:19
     */
    public function validateConfigParameters(array $config)
    {
        if (is_null($config)) {
            throw new InvalidArgumentException('The configuration parameter is null');
        }
        if (empty($config['accessToken']) && empty($config['refreshToken'])) {
            throw new InvalidConfigException('Missing required parameter accessToken or refreshToken');
        }
        if (empty($config['clientId']) || !preg_match("/^amzn1\.application-oa2-client\.[a-z0-9]{32}$/i", $config['clientId'])) {
            throw new InvalidConfigException('Invalid parameter value for clientId.');
        }
        if (empty($config['region']) || !in_array($config['region'], array_keys(self::$apiEndpoints))) {
            throw new InvalidConfigException('Invalid parameter value for region.');
        }
        if (empty($config['clientSecret']) || !preg_match("/^[a-z0-9]{64}$/i", $config['clientSecret'])) {
            throw new InvalidConfigException('Invalid parameter value for clientSecret.');
        }
        if (!empty($config['accessToken']) && !preg_match("/^Atza(\||%7C|%7c).*$/", $config['accessToken'])) {
            throw new InvalidConfigException('Invalid parameter value for accessToken.');
        }
        if (!empty($config['refreshToken']) && !preg_match("/^Atzr(\||%7C|%7c).*$/", $config['refreshToken'])) {
            throw new InvalidConfigException('Invalid parameter value for refreshToken.');
        }
        return true;
    }


    public function setEndpoint(string $region)
    {
        $this->apiEndpoint = self::$apiEndpoints[$region] . '/' . self::$apiVersion;
    }

    /**
     * doRefreshToken
     * @return mixed
     * @throws HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 00:24
     */
    public function doRefreshToken()
    {
        $headers = [
            "Content-Type" => "application/x-www-form-urlencoded",
            "User-Agent"   => 'AdvertisingAPI PHP Client Library v1.2'
        ];
        $params  = [
            "grant_type"    => "refresh_token",
            "refresh_token" => $this->config['refreshToken'],
            "client_id"     => $this->config["clientId"],
            "client_secret" => $this->config["clientSecret"]
        ];
        return $this->request(self::$apiTokenUrl, 'POST', ['form_params' => $params, 'headers' => $headers]);
    }

    /**
     * request
     *
     * @param string $url
     * @param string $requestType
     * @param array $options
     * @return mixed
     * @throws HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-11 23:30
     */
    public function request(string $url, string $requestType, array $options)
    {
        $client   = new \GuzzleHttp\Client();
        $response = $client->request($requestType, $url, $options);
        if (!in_array($response->getStatusCode(), [200, 207])) {
            throw new HttpException($response->getBody());
        }
        echo $response->getBody();
        return \GuzzleHttp\json_decode($response->getBody(), true);
    }

    /**
     * httpGet
     * @param string $url
     * @param array $data
     * @return mixed
     * @throws HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 00:11
     */
    public function httpGet(string $url, array $data = [])
    {
        $headers = [
            'Authorization'                   => 'bearer ' . $this->config['accessToken'],
            'Content-Type'                    => 'application/json',
            'Amazon-Advertising-API-ClientId' => $this->config['clientId'],
        ];
        if (!empty($this->profileId)) {
            $headers['Amazon-Advertising-API-Scope'] = $this->profileId;
        }
        return $this->request($this->apiEndpoint . $url, 'GET', ['query' => $data, 'headers' => $headers]);
    }

    /**
     * httpPostJson
     * @param string $url
     * @param array $data
     * @param array $query
     * @return mixed
     * @throws HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 14:19
     */
    public function httpPostJson(string $url, array $data = [], array $query = [])
    {
        $headers = [
            'Authorization'                   => 'bearer ' . $this->config['accessToken'],
            'Content-Type'                    => 'application/json',
            'Amazon-Advertising-API-ClientId' => $this->config['clientId'],
        ];
        if (!empty($this->profileId)) {
            $headers['Amazon-Advertising-API-Scope'] = $this->profileId;
        }
        return $this->request($this->apiEndpoint . $url, 'POST', ['query' => $query, 'json' => $data, 'headers' => $headers]);
    }


    /**
     * httpPost
     *
     * @param string $url
     * @param array $data
     * @return mixed
     * @throws HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 00:32
     */
    public function httpPut(string $url, array $data = [])
    {
        $headers = [
            'Authorization'                   => 'bearer ' . $this->config['accessToken'],
            'Content-Type'                    => 'application/json',
            'Amazon-Advertising-API-ClientId' => $this->config['clientId'],
        ];
        if (!empty($this->profileId)) {
            $headers['Amazon-Advertising-API-Scope'] = $this->profileId;
        }
        return $this->request($this->apiEndpoint . $url, 'PUT', ['form_params' => $data, 'headers' => $headers]);
    }

    /**
     * httpDelete
     * @param string $url
     * @param array $data
     * @param array $query
     * @return mixed
     * @throws HttpException
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 14:30
     */
    public function httpDelete(string $url, array $data = [], array $query = [])
    {
        $headers = [
            'Authorization'                   => 'bearer ' . $this->config['accessToken'],
            'Content-Type'                    => 'application/json',
            'Amazon-Advertising-API-ClientId' => $this->config['clientId'],
        ];
        if (!empty($this->profileId)) {
            $headers['Amazon-Advertising-API-Scope'] = $this->profileId;
        }
        return $this->request($this->apiEndpoint . $url, 'DELETE', ['query' => $query, 'json' => $data, 'headers' => $headers]);
    }

    /**
     * withAccessTokenMiddleware
     * @return $this
     *
     * @author  baihe <baihe@guahao.com>
     * @date    2019-11-12 00:33
     */
    public function withAccessTokenMiddleware()
    {
        return $this;
    }
}