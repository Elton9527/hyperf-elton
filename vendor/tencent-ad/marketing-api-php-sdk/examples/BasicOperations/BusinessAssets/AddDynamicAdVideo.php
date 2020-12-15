<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建动态商品视频(Dynamic ad video)的简单示例
 */
class AddDynamicAdVideo
{
    public static $tads;
    public static $ACCESS_TOKEN           = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID             = 'YOUR ACCOUNT ID';
    public static $PRODUCT_CATALOG_ID     = 'YOUR PRODUCT CATALOG ID'; // 商品库ID
    public static $PRODUCT_MODE           = 'SINGLE'; // 单商品广告
    public static $PRODUCT_SOURCE         = 'YOUR PRODUCT ID'; // 商品ID
    public static $DYNAMIC_TEMPLATE_ID    = 'YOUR DYNAMIC AD TEMPLATE ID'; // 动态商品模板ID
    public static $DYNAMIC_VIDEO_DURATION = 240; // 动态视频素材最大时长

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

            $response = $tads->dynamicAdVideo()
                             ->add([
                                 'account_id'             => static::$ACCOUNT_ID,
                                 'product_catalog_id'     => static::$PRODUCT_CATALOG_ID,
                                 'product_mode'           => static::$PRODUCT_MODE,
                                 'product_source'         => static::$PRODUCT_SOURCE,
                                 'video_max_duration'     => static::$DYNAMIC_VIDEO_DURATION,
                                 'dynamic_ad_template_id' => static::$DYNAMIC_TEMPLATE_ID,
                             ]);
            $videoId = $response->getVideoId();

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
        $example = new AddDynamicAdVideo();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
