<?php
/**
 * Created by PhpStorm.
 * User: Elton
 * Date: 2021/2/4
 * Time: 16:44
 */

namespace App\Controller;


use Hyperf\Config\Annotation\Value;
use Hyperf\Contract\ConfigInterface;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\Logger\LoggerFactory;

/**
 * @AutoController()
 * Class BookController
 * @package App\Controller
 */
class BookController extends AbstractController
{
    /**
     * @var ConfigInterface
     */
    protected $config;


    /**
     * @Value("config.app_env")
     */
    private $configValue;


    /**
     * @var LoggerFactory
     */
    private $logger;

    public function __construct(LoggerFactory $loggerFactory)
    {
        $this->logger = $loggerFactory->get('log', 'default');
    }


    public function say()
    {
        //echo $this->config->get('app_name');
        echo "Hehe" . PHP_EOL;
    }


    /**
     * DEMO：返回JSON格式数据
     * @param ResponseInterface $response
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function json(ResponseInterface $response){
        $data = [
            'key' => 'value'
        ];

        return $response->json($data);
    }


    /**
     * DEMO：返回raw格式数据
     * @param ResponseInterface $response
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function raw(ResponseInterface $response)
    {
        return $response->raw('Hello Hyperf');
    }


    /**
     * Demo 记录日志信息
     */
    public function writelog()
    {
        $this->logger->info("Your log message");
    }

}
