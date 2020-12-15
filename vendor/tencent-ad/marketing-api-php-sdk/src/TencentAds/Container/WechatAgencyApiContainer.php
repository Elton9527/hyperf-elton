<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\WechatAgencyApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class WechatAgencyApiContainer extends ApiContainer
{
    /** @var WechatAgencyApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatAgencyApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatAgencyApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatAgencyApi wechatAgencyGet function
     * @param array params
     * @return \TencentAds\Model\WechatAgencyGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatAgencyGet($accountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatAgencyApi wechatAgencyGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatAgencyGetAsync($accountId, $fields);
            return $response;
        });
    }
}
