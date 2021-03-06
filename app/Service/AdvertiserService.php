<?php
/**
 * Created by PhpStorm.
 * User: Elton
 * Date: 2020/12/15
 * Time: 16:38
 */

namespace App\Service;


use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;
use TencentAds\TencentAds;

class AdvertiserService
{
    public static $tads;
    private $account_id;


    public function __construct($access_token)
    {
        $tads = TencentAds::init([
            'access_token' =>$access_token,
            'is_debug' => true,
        ]);
        //$tads->useSandbox();
        $tads->useProduction();
        echo json_encode($tads);
        echo PHP_EOL;
        static::$tads = $tads;
        return $tads;
    }

    /**
     * 获取广告主列表
     * @return \TencentAds\Model\WechatAdvertiserGetResponseData
     * @throws TencentAdsResponseException
     * @throws TencentAdsSDKException
     */
    public function getAdvertiserList()
    {
        try {
            /* @var TencentAds $tads */
            $tads = static::$tads;

            $response = $tads->wechatAdvertiser()
                ->get([]);

            // 从返回里获得Advertiser信息
            foreach ($response->getList() as $advertiserInfo) {
                echo $advertiserInfo . PHP_EOL;
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
        } catch (\Exception $e) {
            echo 'Other exception: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }

    public function getAdvertiser($account_id)
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
                    'account_id' => $account_id,
                    'fields'     => $fields,
                ]);

            // 从返回里获得Advertiser信息
            foreach ($response->getList() as $advertiserInfo) {
                echo $advertiserInfo . PHP_EOL;
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


    public function getWechatAdvertiser()
    {
        try {
            /* @var TencentAds $tads */
            $tads = static::$tads;

            $response = $tads->wechatAdvertiserSpecification()
                ->get([]);

            // 从返回里获得Advertiser信息
            foreach ($response->getList() as $advertiserInfo) {
                echo "从返回里获得Advertiser信息:" . PHP_EOL;
                echo $advertiserInfo . PHP_EOL;
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
        } catch (\Exception $e) {
            echo 'Other exception: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }



}
