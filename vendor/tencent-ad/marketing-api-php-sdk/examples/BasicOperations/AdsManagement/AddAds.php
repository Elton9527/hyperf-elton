<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建广告(Ad)的简单示例
 */
class AddAds
{
    public static $tads;
    public static $ACCESS_TOKEN  = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID    = 'YOUR ACCOUNT ID';
    public static $CAMPAIGN_ID   = 'YOUR CAMPAIGN ID';
    public static $ADGROUP_ID    = 'YOUR ADGROUP ID';
    public static $ADCREATIVE_ID = 'YOUR ADCREATIVE ID';

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

            $adName = 'SDK广告' . uniqid();

            $response = $tads->ads()
                             ->add([
                                 'account_id'    => static::$ACCOUNT_ID,
                                 'campaign_id'   => static::$CAMPAIGN_ID,
                                 'adgroup_id'    => static::$ADGROUP_ID,
                                 'adcreative_id' => static::$ADCREATIVE_ID,
                                 'ad_name'       => $adName,
                             ]);
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
}

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    try {
        $example = new AddAds();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
