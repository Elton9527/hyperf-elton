<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\ProductItemsVerticalsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class ProductItemsVerticalsApiContainer extends ApiContainer
{
    /** @var ProductItemsVerticalsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ProductItemsVerticalsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ProductItemsVerticalsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ProductItemsVerticalsApi productItemsVerticalsGet function
     * @param array params
     * @return \TencentAds\Model\ProductItemsVerticalsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->productItemsVerticalsGet($fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProductItemsVerticalsApi productItemsVerticalsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->productItemsVerticalsGetAsync($fields);
            return $response;
        });
    }
}
