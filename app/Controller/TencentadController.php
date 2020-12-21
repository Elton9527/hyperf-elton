<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\AdvertiserService;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use TencentAds\TencentAds;

/**
 * @AutoController()
 * Class TencentadController
 * @package App\Controller
 */
class TencentadController
{
    private $redirect_uri = 'http://tf.cps24.dzods.cn';
    private $client_id = '1111217397';
    private $client_secret = 'zqQAfQfXGR6tKOzC';
    private $authorization_code = 'a6275da6af13cb1d2d3f4886db38fa96';

    public $advertiser;


    public function index(RequestInterface $request, ResponseInterface $response)
    {
        //$this->getAuthCode();
        $token = '';

        $token = $this->getToken();
        /**
        $access_token = "efbbdc39d39b076fcf4382bab7d448c2";
        $account_id = 16585766;

        $this->advertiser = new AdvertiserService($access_token);
        $this->advertiser->getAdvertiserList();*/

        return $response->raw("Hello Hyperf!{$token}");
    }


    public function getWechatAdvertiser(RequestInterface $request, ResponseInterface $response)
    {
        $access_token = "efbbdc39d39b076fcf4382bab7d448c2";
        $this->advertiser = new AdvertiserService($access_token);
        $this->advertiser->getWechatAdvertiser();
    }


    public function test(RequestInterface $request, ResponseInterface $response)
    {

        //$account_id =  16782335;
        //$this->advertiser->getAdvertiser($account_id);
    }

    //第二步 获取token
    public function getToken()
    {
        $tads = TencentAds::init([]);
        $params = [
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
            'grant_type' => 'authorization_code',
            'authorization_code' => $this->authorization_code,
            'redirect_uri' => $this->redirect_uri
        ];
        $token = $tads->oauth()->token($params);
        return $token;
    }

    //第一步 获取authcode
    public function getAuthCode()
    {
        $redirect_url = urlencode($this->redirect_uri);
        $url = "https://developers.e.qq.com/oauth/authorize?client_id={$this->client_id}&redirect_uri={$redirect_url}";
        // 回调的URL接口地址填写成项目的接口地址可以将auth_code 进行入库
        echo "浏览器中访问下面的URL即可完成授权" . PHP_EOL;
        echo $url . PHP_EOL;
    }
}
