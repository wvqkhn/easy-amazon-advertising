<?php


namespace easyAmazonAdv\Kernel\Http;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * @var \EasyDingTalk\Application
     */
    protected $app;
    /**
     * @var array
     */
    protected static $httpConfig = [
        'base_uri' => 'https://oapi.dingtalk.com',
    ];

    /**
     * @param \EasyDingTalk\Application $app
     */
    public function __construct($app)
    {
        $this->app = $app;
//        parent::__construct(array_merge(static::$httpConfig, $this->app['config']->get('http', [])));
    }

    /**
     * @param array $config
     */
    public function setHttpConfig(array $config)
    {
        static::$httpConfig = array_merge(static::$httpConfig, $config);
    }

    /**
     * @return $this
     */
    public function withAccessTokenMiddleware()
    {
//        if (isset($this->getMiddlewares()['access_token'])) {
//            return $this;
//        }

        return $this;

//        return new Client();
//        $middleware = function (callable $handler) {
//            return function (RequestInterface $request, array $options) use ($handler) {
//                if ($this->app['access_token']) {
//                    parse_str($request->getUri()->getQuery(), $query);
//                    $request = $request->withUri(
//                        $request->getUri()->withQuery(http_build_query(['access_token' => $this->app['access_token']->getToken()] + $query))
//                    );
//                }
//                return $handler($request, $options);
//            };
//        };
//        $this->pushMiddleware($middleware, 'access_token');
    }
}