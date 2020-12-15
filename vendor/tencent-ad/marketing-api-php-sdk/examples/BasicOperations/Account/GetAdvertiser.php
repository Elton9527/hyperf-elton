<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取广告主(Advertiser)列表的简单示例
 */
class GetAdvertiser
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

            $fields = [
                'account_id', 'daily_budget', 'system_status', 'reject_message', 'corporation_name',
                'corporation_licence', 'certification_image_id', 'certification_image', 'identity_number',
                'individual_qualification', 'corporate_image_name', 'corporate_image_logo', 'system_industry_id',
                'customized_industry', 'introduction_url', 'industry_qualification_image_id_list',
                'industry_qualification_image', 'ad_qualification_image_id_list', 'ad_qualification_image',
                'contact_person', 'contact_person_email', 'contact_person_telephone', 'contact_person_mobile',
                'wechat_spec', 'websites',
            ]; // 需要返回的字段
            $response = $tads->advertiser()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'fields'     => $fields,
                             ]);

            // 从返回里获得Advertiser信息
            foreach ($response->getList() as $advertiserInfo) {
                // echo $advertiserInfo . PHP_EOL;
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
        $example = new GetAdvertiser();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
