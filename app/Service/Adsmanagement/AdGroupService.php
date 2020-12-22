<?php
/**
 * Created by PhpStorm.
 * User: Elton
 * Date: 2020/12/22
 * Time: 13:41
 */

namespace App\Service\Adsmanagement;


use TencentAds\TencentAds;

class AdGroupService
{
    public static $tads;
    public static $ACCESS_TOKEN;
    public static $ACCOUNT_ID;
    public static $CAMPAIGN_ID;
    public static $PROMOTED_OBJECT_TYPE = 'PROMOTED_OBJECT_TYPE_LINK_WECHAT'; // 微信公众账号逻辑 支持创建的推广目标类型枚举列表：{PROMOTED_OBJECT_TYPE_APP_ANDROID, PROMOTED_OBJECT_TYPE_APP_IOS, PROMOTED_OBJECT_TYPE_ECOMMERCE, PROMOTED_OBJECT_TYPE_MINI_GAME_WECHAT, PROMOTED_OBJECT_TYPE_LINK_WECHAT, PROMOTED_OBJECT_TYPE_LEAD_AD}
    public static $SITE_SET = 'SITE_SET_WECHAT'; // 微信公众账号逻辑 仅支持 SITE_SET_WECHAT
    public static $BILLING_EVENT = 'BILLINGEVENT_IMPRESSION'; // 按曝光扣费(CPM)
    public static $OPTIMIZATION_GOAL = 'OPTIMIZATIONGOAL_IMPRESSION'; // 广告目标优化类型：曝光
    public static $BID_AMOUNT = 150; // 出价1.5元(150分)
    public static $BEGIN_DATE; // 广告开始投放日期
    public static $END_DATE; // 广告结束投放日期

    public function init($access_token, $account_id, $campaign_id = '', $begin_date = '', $end_date = '')
    {
        static::$ACCESS_TOKEN = $access_token;
        static::$ACCOUNT_ID = $account_id;
        static::$CAMPAIGN_ID = $campaign_id;
        static::$BEGIN_DATE = $begin_date;
        static::$END_DATE = $end_date;

        $tads = TencentAds::init([
            'access_token' => static::$ACCESS_TOKEN,
            'is_debug' => true,
        ]);
        //$tads->useSandbox(); // 默认访问沙箱环境，如访问正式环境，请切换为$tads->useProduction()
        $tads->useProduction();
        static::$tads = $tads;

        return $tads;
    }


    /**
     * 创建广告组
     * @return int
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function addAdGroup()
    {
        try {
            /* @var TencentAds $tads */
            $tads = static::$tads;

            $adgroupName = 'SDK广告组' . uniqid();
            $timeSeries = str_repeat('1', 48 * 7); // 全天投放
            $targeting = [
                'user_os' => ['IOS'], // 定向IOS用户
                'geo_location'         => [
                    'location_types' => ['LIVE_IN'],
                    'regions' => [110000],
                ], // 必填
            ];

            $response = $tads->adgroups()
                ->add([
                    'account_id'           => static::$ACCOUNT_ID,
                    'campaign_id'          => static::$CAMPAIGN_ID,
                    'adgroup_name'         => $adgroupName,
                    'promoted_object_type' => static::$PROMOTED_OBJECT_TYPE,
                    'begin_date'           => static::$BEGIN_DATE,
                    'end_date'             => static::$END_DATE,
                    'billing_event'        => static::$BILLING_EVENT,
                    'bid_amount'           => static::$BID_AMOUNT,
                    'optimization_goal'    => static::$OPTIMIZATION_GOAL, //广告优化目标类型
                    'time_series'          => $timeSeries,
                    'site_set'             => [static::$SITE_SET],
                    'targeting'            => $targeting,
                    'daily_budget'         => 0, // 必填
                ]);
            $adgroupId = $response->getAdgroupId();

            return $adgroupId;
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
     * 广告组列表
     * @return \TencentAds\Model\AdgroupsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function adgrouplist()
    {
        try {
            /* @var TencentAds $tads */
            $tads = static::$tads;

            $filtering = [
                [
                    'field'    => 'promoted_object_type',
                    'operator' => 'EQUALS',
                    'values'   => ['PROMOTED_OBJECT_TYPE_APP_IOS'],
                ],
            ]; // 过滤条件
            $fields = [
                'adgroup_id',
                'configured_status',
                'adgroup_name',
                'campaign_id',
                'promoted_object_type',
                'ad_count',
                'created_time',
                'last_modified_time',
                //'product_mode',
                //'product_source'
            ]; // 需要返回的字段
            $response = $tads->adgroups()
                ->get([
                    'account_id' => static::$ACCOUNT_ID,
                    //'filtering'  => $filtering,
                    'fields'     => $fields,
                ]);

            // 从返回里获得Adgroups信息
            foreach ($response->getList() as $adgroupInfo) {
                // echo 'Adgroup ID: ' . $adgroupInfo->getAdgroupId() . PHP_EOL;
                // echo 'Campaign ID: ' . $adgroupInfo->getCampaignId() . PHP_EOL;
                // echo 'Adgroup name: ' . $adgroupInfo->getAdgroupName() . PHP_EOL;
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
