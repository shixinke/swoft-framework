<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace SwoftTest\Pool;

use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Value;

/**
 * the properties of config
 *
 * @Bean
 */
class ConsulPptConfig
{
    /**
     * adress
     *
     * @Value(name="${config.provider.consul.address}")
     * @var string
     */
    private $address = 'http://127.0.0.1:80';

    /**
     * the tags of register service
     *
     * @Value(name="${config.provider.consul.tags}")
     * @var array
     */
    private $tags = [];

    /**
     * the timeout of consul
     *
     * @Value(name="${config.provider.consul.timeout}")
     * @var int
     */
    private $timeout = 300;

    /**
     * the interval of register service
     *
     * @Value(name="${config.provider.consul.interval}")
     * @var int
     */
    private $interval = 3;

    public function getServiceList(string $serviceName, ...$params)
    {
        // TODO: Implement getServiceList() method.
    }

    public function registerService(...$params)
    {
        // TODO: Implement registerService() method.
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @return int
     */
    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     * @return int
     */
    public function getInterval(): int
    {
        return $this->interval;
    }
}
