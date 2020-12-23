<?php
/**
 * Created by PhpStorm.
 * User: Elton
 * Date: 2020/12/22
 * Time: 16:34
 * 广告创意
 */

namespace App\Service\Adsmanagement;

use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

class AdCreativeService
{
    public static $tads;
    public static $ACCESS_TOKEN;
    public static $ACCOUNT_ID;
    public static $CAMPAIGN_ID;
    public static $PROMOTED_OBJECT_TYPE   = 'PROMOTED_OBJECT_TYPE_LINK_WECHAT'; // 推广普通外链
    public static $SITE_SET               = 'SITE_SET_WECHAT'; // 投放QQ空间流量
    public static $ADCREATIVE_TEMPLATE_ID = 567; //  图片
    // ADCREATIVE_TEMPLATE_ID 通过下面URL进行查询，创建时，需要根据 ADCREATIVE_TEMPLATE_ID 配置对应的 $adcreativeElements
    // https://developers.e.qq.com/docs/tools/adcreative_template?version=1.1&_preview=1
    public static $AD_TITLE               = '这里是广告标题'; // 广告标题，968规格要求：字数：10~14
    public static $AD_DESCRIPTION         = '这里是广告文案'; // 广告文案，968规格要求：字数：24~30
    public static $PAGE_TYPE              = 'PAGE_TYPE_DEFAULT'; // 默认落地页类型
    public static $PAGE_URL               = 'http://www.baidu.com'; // 广告落地页地址

    public function init($access_token, $account_id, $campaign_id)
    {
        static::$ACCESS_TOKEN = $access_token;
        static::$ACCOUNT_ID = $account_id;
        static::$CAMPAIGN_ID = $campaign_id;

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

            $adcreativeName = 'SDK广告创意' . uniqid();
            $adcreativeElements = [
                /*'title' => static::$AD_TITLE,
                'description' => static::$AD_DESCRIPTION,*/
                'image'=>"315852664",
            ];
            $pageSpec = [
                'page_url' => static::$PAGE_URL,
            ];

            $params = [
                'account_id' => static::$ACCOUNT_ID,
                'campaign_id' => static::$CAMPAIGN_ID,
                'adcreative_name' => $adcreativeName,
                'adcreative_template_id' => static::$ADCREATIVE_TEMPLATE_ID,
                'adcreative_elements' => $adcreativeElements,
                'promoted_object_type' => static::$PROMOTED_OBJECT_TYPE,
                'page_type' => static::$PAGE_TYPE,
                'site_set' => [static::$SITE_SET],
                'page_spec' => $pageSpec,
            ];
            echo json_encode($params);


            $response = $tads->adcreatives()->add($params);
            $adcreativeId = $response->getAdcreativeId();
            return $adcreativeId;
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

    public function list()
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
            $fields =
                [
                    'adcreative_id', 'campaign_id', 'adcreative_name', 'adcreative_template_id', 'adcreative_elements', 'page_type',
                    'promoted_object_type'
                ]; // 需要返回的字段
            $response = $tads->adcreatives()
                ->get([
                    'account_id' => static::$ACCOUNT_ID,
                    //'filtering'  => $filtering,
                    'fields'     => $fields,
                ]);

            // 从返回里获得Adcreatives信息
            foreach ($response->getList() as $adcreativeInfo) {
                // echo 'Adcreative ID: ' . $adcreativeInfo->getAdcreativeId() . PHP_EOL;
                // echo 'Campaign ID: ' . $adcreativeInfo->getCampaignId() . PHP_EOL;
                // echo 'Adcreative name: ' . $adcreativeInfo->getAdcreativeName() . PHP_EOL;
            }

            return $response->getList();
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
