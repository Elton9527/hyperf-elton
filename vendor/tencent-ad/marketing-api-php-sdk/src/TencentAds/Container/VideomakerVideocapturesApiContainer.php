<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\VideomakerVideocapturesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class VideomakerVideocapturesApiContainer extends ApiContainer
{
    /** @var VideomakerVideocapturesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return VideomakerVideocapturesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new VideomakerVideocapturesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle VideomakerVideocapturesApi videomakerVideocapturesAdd function
     * @param array params
     * @return \TencentAds\Model\VideomakerVideocapturesAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $videoId = isset($params['video_id']) ? $params['video_id'] : null;
            $videoFile = isset($params['video_file']) ? $params['video_file'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $number = isset($params['number']) ? $params['number'] : null;
            $response = $this->apiInstance->videomakerVideocapturesAdd($accountId, $videoId, $videoFile, $signature, $number);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle VideomakerVideocapturesApi videomakerVideocapturesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $videoId = isset($params['video_id']) ? $params['video_id'] : null;
            $videoFile = isset($params['video_file']) ? $params['video_file'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $number = isset($params['number']) ? $params['number'] : null;
            $response = $this->apiInstance->videomakerVideocapturesAddAsync($accountId, $videoId, $videoFile, $signature, $number);
            return $response;
        });
    }
}
