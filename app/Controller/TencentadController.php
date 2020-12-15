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
    private $authorization_code = '29a8b20b9501e5f65ddda412feac0497';

    public $advertiser;


    public function index(RequestInterface $request, ResponseInterface $response)
    {
        //$this->getAuthCode();
        $token = '';
        //$token = $this->getToken();
        $access_token = "bd00ff47e3f2d80e3f2b875f12893a42";
        $account_id = 16585766;

        $this->advertiser = new AdvertiserService($access_token, $account_id);

        $this->advertiser->main();

        return $response->raw("Hello Hyperf!{$token}");
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
