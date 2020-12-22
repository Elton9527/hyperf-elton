<?php
/**
 * Created by PhpStorm.
 * User: Elton
 * Date: 2020/12/21
 * Time: 14:31
 */

namespace App\Controller;


use App\Service\Adsmanagement\AdCampaignsService;
use App\Service\Adsmanagement\AdGroupService;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController()
 * Class AdCampaignController
 * @package App\Controller
 */
class AdcampaignController
{

    protected $access_token = 'c9763af84ed78d85e841dd3c4781331b';
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


    public function test($a)
    {
        echo $a;
    }

}
