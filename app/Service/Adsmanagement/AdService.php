<?php
/**
 * Created by PhpStorm.
 * User: Elton
 * Date: 2020/12/23
 * Time: 14:18
 */

namespace App\Service\Adsmanagement;

use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

class AdService
{
    public static $tads;
    public static $ACCESS_TOKEN;
    public static $ACCOUNT_ID;
    public static $CAMPAIGN_ID;
    public static $ADGROUP_ID;
    public static $ADCREATIVE_ID;

    public function init($access_token, $account_id, $campaign_id = '', $adgroup_id = '', $adcreative_id = '')
    {
        static::$ACCESS_TOKEN = $access_token;
        static::$ACCOUNT_ID = $account_id;

        static::$CAMPAIGN_ID = $campaign_id;
        static::$ADGROUP_ID = $adgroup_id;
        static::$ADCREATIVE_ID = $adcreative_id;

        $tads = TencentAds::init([
            'access_token' => static::$ACCESS_TOKEN,
            'is_debug'     => true,
        ]);
        //$tads->useSandbox(); // 默认访问沙箱环境，如访问正式环境，请切换为$tads->useProduction()
        $tads->useProduction();
        static::$tads = $tads;

        return $tads;
    }

    public function add()
    {
        try {
            /* @var TencentAds $tads */
            $tads = static::$tads;

            $adName = 'Elton_SDK广告' . uniqid();

            $params = [
                'account_id'    => static::$ACCOUNT_ID,
                'campaign_id'   => static::$CAMPAIGN_ID,
                'adgroup_id'    => static::$ADGROUP_ID,
                'adcreative_id' => static::$ADCREATIVE_ID,
                'ad_name'       => $adName,
                //'configured_status' => 'AD_STATUS_NORMAL',
                //'impression_tracking_url' => 'http://miaozhen.com/track?from=tencent&aid=30304',
                'click_tracking_url' => 'http://miaozhen.com/track2?from=tencent&aid=30304',
                //'feeds_interaction_enabled' => 'false',
                //'configured_status' => 'AD_STATUS_NORMAL',
            ];

            //echo json_encode($params);
            $response = $tads->ads()->add($params);
            $adId = $response->getAdId();

            return $adId;
        } catch (TencentAdsResponseException $e) {
            // When Api returns an error
            echo 'Tencent ads returned an error: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        } catch (TencentAdsSDKException $e) {
            // When validation fails or other local issues
            echo 'Tencent ads SDK returned an error: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        } catch (Exception $e) {
            echo 'Other exception: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }

    /**
     * 获取广告列表
     * @return \TencentAds\Model\AdsGetResponseData
     * @throws TencentAdsResponseException
     * @throws TencentAdsSDKException
     * @throws \TencentAds\ApiException
     */
    public function list()
    {
        try {
            /* @var TencentAds $tads */
            $tads = static::$tads;

            $filtering = [
                [
                    'field'    => 'configured_status',
                    'operator' => 'EQUALS',
                    'values'   => ['AD_STATUS_NORMAL'],
                ],
            ]; // 过滤条件
            $fields = ['ad_id', 'configured_status','system_status','ad_name','campaign_id', 'adgroup_id', 'adcreative_id', 'created_time','last_modified_time']; // 需要返回的字段
            $response = $tads->ads()
                ->get([
                    'account_id' => static::$ACCOUNT_ID,
                    //'filtering'  => $filtering,
                    'fields'     => $fields,
                ]);

            // 从返回里获得Ads信息
            foreach ($response->getList() as $adInfo) {
                // echo 'Ad ID: ' . $adInfo->getAdId() . PHP_EOL;
                // echo 'Campaign ID: ' . $adInfo->getCampaignId() . PHP_EOL;
                // echo 'Adgroup ID: ' . $adInfo->getAdgroupId() . PHP_EOL;
                // echo 'Adcreative ID: ' . $adInfo->getAdcreativeId() . PHP_EOL;
                // echo 'Ad name: ' . $adInfo->getAdName() . PHP_EOL;
            }

            return $response;
        } catch (TencentAdsResponseException $e) {
            // When Api returns an error
            echo 'Tencent ads returned an error: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        } catch (TencentAdsSDKException $e) {
            // When validation fails or other local issues
            echo 'Tencent ads SDK returned an error: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        } catch (Exception $e) {
            echo 'Other exception: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }
}
