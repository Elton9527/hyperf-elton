<?php
/**
 * Created by PhpStorm.
 * User: Elton
 * Date: 2020/12/21
 * Time: 14:31
 */

namespace App\Controller;


use App\Service\Adsmanagement\AdCampaignsService;
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

}
