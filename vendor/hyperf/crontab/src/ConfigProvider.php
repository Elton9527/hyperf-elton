<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Crontab;

use Hyperf\Crontab\Listener\CrontabRegisterListener;
use Hyperf\Crontab\Listener\OnPipeMessageListener;
use Hyperf\Crontab\Strategy\StrategyInterface;
use Hyperf\Crontab\Strategy\WorkerStrategy;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'dependencies' => [
                StrategyInterface::class => WorkerStrategy::class,
            ],
            'listeners' => [
                CrontabRegisterListener::class,
                OnPipeMessageListener::class,
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for crontab.',
                    'source' => __DIR__ . '/../publish/crontab.php',
                    'destination' => BASE_PATH . '/config/autoload/crontab.php',
                ],
            ],
        ];
    }
}
