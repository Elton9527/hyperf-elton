<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\BrandApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class BrandApiContainer extends ApiContainer
{
    /** @var BrandApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BrandApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BrandApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BrandApi brandAdd function
     * @param array params
     * @return \TencentAds\Model\BrandAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $name = isset($params['name']) ? $params['name'] : null;
            $brandImageFile = isset($params['brand_image_file']) ? $params['brand_image_file'] : null;
            $response = $this->apiInstance->brandAdd($accountId, $name, $brandImageFile);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BrandApi brandAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $name = isset($params['name']) ? $params['name'] : null;
            $brandImageFile = isset($params['brand_image_file']) ? $params['brand_image_file'] : null;
            $response = $this->apiInstance->brandAddAsync($accountId, $name, $brandImageFile);
            return $response;
        });
    }


    /**
     * Handle BrandApi brandGet function
     * @param array params
     * @return \TencentAds\Model\BrandGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->brandGet($accountId, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BrandApi brandGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->brandGetAsync($accountId, $page, $pageSize, $fields);
            return $response;
        });
    }
}
