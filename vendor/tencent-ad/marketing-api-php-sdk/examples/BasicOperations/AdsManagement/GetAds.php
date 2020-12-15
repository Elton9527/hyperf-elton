<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取广告(Ad)列表的简单示例
 */
class GetAds
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';

    public function init()
    {
        $tads = TencentAds::init([
            'access_token' => static::$ACCESS_TOKEN,
            'is_debug'     => true,
        ]);
        $tads->useSandbox(); // 默认访问沙箱环境，如访问正式环境，请切换为$tads->useProduction()
        static::$tads = $tads;

        return $tads;
    }

    public function main()
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
            $fields = ['ad_id', 'campaign_id', 'adgroup_id', 'adcreative_id', 'ad_name']; // 需要返回的字段
            $response = $tads->ads()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'filtering'  => $filtering,
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

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    try {
        $example = new GetAds();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
