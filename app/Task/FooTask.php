<?php
/**
 * Created by PhpStorm.
 * User: Elton
 * Date: 2020/12/15
 * Time: 15:27
 */

namespace App\Task;

use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Crontab\Annotation\Crontab;
use Hyperf\Di\Annotation\Inject;

/**
 * 默认一分钟执行一次
 * @Crontab(name="Foo", rule="*\/5 * * * * *", callback="sayhi", memo="Elton 定时任务示例,每5秒打一次招呼")
 * Class FooTask
 * @package App
 */
class FooTask
{
    /**
     * @Inject()
     * @var StdoutLoggerInterface
     */
    private $logger;

    public function execute()
    {
        $this->logger->info("Hi, execute ".date('Y-m-d H:i:s', time()));
    }


    public function sayhi()
    {
        $this->logger->info("Hi, Elton " . date('Y-m-d H:i:s', time()));
    }

}
