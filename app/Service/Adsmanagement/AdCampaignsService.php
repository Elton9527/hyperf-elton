<?php
/**
 * Created by PhpStorm.
 * User: Elton
 * Date: 2020/12/21
 * Time: 14:22
 *
 * 广告推广计划管理
 */

namespace App\Service\Adsmanagement;


use TencentAds\TencentAds;

class AdCampaignsService
{
    public static $tads;
    public static $ACCESS_TOKEN         = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID           = 'YOUR ACCOUNT ID';
    public static $CAMPAIGN_TYPE        = 'CAMPAIGN_TYPE_NORMAL'; // 普通推广计划
    //public static $PROMOTED_OBJECT_TYPE = 'PROMOTED_OBJECT_TYPE_LINK'; // 推广普通外链
    public static $PROMOTED_OBJECT_TYPE = 'PROMOTED_OBJECT_TYPE_APP_IOS'; // 推广普通外链

    public static $DAILY_BUDGET         = 5000; // 日预算50元(5000分)


    public function init($access_token, $account_id)
    {
        static::$ACCESS_TOKEN = $access_token;
        static::$ACCOUNT_ID = $account_id;
        $tads = TencentAds::init([
            'access_token' => static::$ACCESS_TOKEN,
            'is_debug'     => true,
        ]);
        //$tads->useSandbox(); // 默认访问沙箱环境，如访问正式环境，请切换为$tads->useProduction()
        $tads->useProduction();
        static::$tads = $tads;

        return $tads;
    }

    /**
     * 创建广告计划
     * @return string
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function addcampaign()
    {
        try {
            /* @var \TencentAds\TencentAds $tads */
            $tads = static::$tads;

            $campaignName = 'SDK计划' . uniqid();

            $response = $tads->campaigns()
                ->add([
                    'account_id'           => static::$ACCOUNT_ID,
                    'campaign_name'        => $campaignName,
                    'campaign_type'        => static::$CAMPAIGN_TYPE,
                    'promoted_object_type' => static::$PROMOTED_OBJECT_TYPE,
                    'daily_budget'         => static::$DAILY_BUDGET,
                ]);
            $campaignId = $response->getCampaignId();

            return $campaignId . "==" . static::$ACCESS_TOKEN;
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
     * 获取所有的推广计划
     * @return \TencentAds\Model\CampaignsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function getCampaignsList()
    {
        try {
            /* @var TencentAds $tads */
            $tads = static::$tads;

            $filtering = [
                [
                    'field' => 'promoted_object_type',
                    'operator' => 'EQUALS',
                    'values' => ['PROMOTED_OBJECT_TYPE_APP_IOS'],
                ],
            ]; // 过滤条件
            $fields = ['campaign_id', 'configured_status', 'campaign_name', 'campaign_type', 'promoted_object_type', 'created_time', 'last_modified_time']; // 需要返回的字段
            $response = $tads->campaigns()
                ->get([
                    'account_id' => static::$ACCOUNT_ID,
                    //'filtering' => $filtering,
                    'fields' => $fields,
                ]);

            // 从返回里获得Campaigns信息
            foreach ($response->getList() as $campaignInfo) {
                // echo 'Campaign ID: ' . $campaignInfo->getCampaignId() . PHP_EOL;
                // echo 'Campaign name: ' . $campaignInfo->getCampaignName() . PHP_EOL;
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
