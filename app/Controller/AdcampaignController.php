<?php
/**
 * Created by PhpStorm.
 * User: Elton
 * Date: 2020/12/21
 * Time: 14:31
 */

namespace App\Controller;


use App\Service\Adsmanagement\AdCampaignsService;
use App\Service\Adsmanagement\AdCreativeService;
use App\Service\Adsmanagement\AdGroupService;
use App\Service\Adsmanagement\AdService;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController()
 * Class AdCampaignController
 * @package App\Controller
 */
class AdcampaignController
{

    protected $access_token = '091a67c542be563c7096bf9e9a4333b5';
    //protected $account_id = 16585766;
    protected $account_id = 16782335;


    /**
     * @Inject()
     * @var AdCampaignsService
     */
    protected $adcampaign_service;

    /**
     * @Inject()
     * @var AdGroupService
     */
    protected $adgroup_service;


    /**
     * @Inject()
     * @var AdCreativeService
     */
    protected $adcreative_service;


    /**
     * @Inject()
     * @var AdService
     */
    protected $ad_service;

    public function addcampaign()
    {
        $this->adcampaign_service->init($this->access_token, $this->account_id);
        $campaignId = $this->adcampaign_service->addcampaign();
        echo "Hello, I am ad campaign Case! CampaignId:{$campaignId}";
    }


    /**
     * 获取所有的广告计划
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function campaignlist()
    {
        $this->adcampaign_service->init($this->access_token, $this->account_id);
        $data = $this->adcampaign_service->getCampaignsList();
        echo "All campaign:".json_encode($data);
    }


    /**
     * 添加广告组
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function addadgroup()
    {
        $campaign_id = '387118929';
        $begin_date = date('Y-m-d', time());
        $end_date = date('Y-m-d', strtotime("+1 week"));
        //echo $begin_date.PHP_EOL;
        //echo $end_date.PHP_EOL;
        $this->adgroup_service->init($this->access_token, $this->account_id, $campaign_id, $begin_date, $end_date);
        $adGroupId = $this->adgroup_service->addAdGroup();
        echo $adGroupId;
    }


    /**
     * 获取广告组列表
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function adgrouplist()
    {
        $this->adgroup_service->init($this->access_token, $this->account_id);
        $data = $this->adgroup_service->adgrouplist();
        echo "Ad group list:" . json_encode($data);
    }


    /**
     * 创建广告创意
     * @throws \TencentAds\Exception\TencentAdsResponseException
     * @throws \TencentAds\Exception\TencentAdsSDKException
     */
    public function addcreative()
    {
        $campaign_id = '387118929';
        $this->adcreative_service->init($this->access_token, $this->account_id, $campaign_id);
        $creative_id = $this->adcreative_service->add();
        echo "创建广告创意成功：{$creative_id}";
    }

    /**
     * 获取创意广告列表
     * @throws \TencentAds\Exception\TencentAdsResponseException
     * @throws \TencentAds\Exception\TencentAdsSDKException
     */
    public function creativelist()
    {
        $campaign_id = '387118929';
        $this->adcreative_service->init($this->access_token, $this->account_id, $campaign_id);
        $data = $this->adcreative_service->list();
        echo "创意广告列表：" . json_encode($data);
    }


    /**
     * 创建一条广告
     * 创建广告参数 campaign adgroup adcreative 促销目标需要一直，否则创建不成功
     * @throws \TencentAds\Exception\TencentAdsResponseException
     * @throws \TencentAds\Exception\TencentAdsSDKException
     */
    public function addad()
    {
        $campaign_id = '387118929';
        $adgroup_id = '387189826';
        $adcreative_id = '387792219';

        $this->ad_service->init($this->access_token, $this->account_id,$campaign_id, $adgroup_id, $adcreative_id);
        $adId  = $this->ad_service->add();
        echo "添加广告成功，广告ID{$adId}";
    }


    /**
     * 获取所有的广告列表
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     * @throws \TencentAds\Exception\TencentAdsSDKException
     */
    public function adlist()
    {
        $this->ad_service->init($this->access_token, $this->account_id);
        $data  = $this->ad_service->list();
        echo "广告列表：".json_encode($data);
    }
}
