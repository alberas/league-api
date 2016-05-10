<?php


namespace LeagueApi\LolStatus\Classes;

use JMS\Serializer\Annotation as JMS;

class ShardStatus extends Shard
{
    /**
     * @JMS\Type("array<LeagueApi\LolStatus\Classes\Service>")
     * @var \LeagueApi\LolStatus\Classes\Service[] $services
     */
    private $services;

    /**
     * @return Service[]
     */
    public function getServices()
    {
        return $this->services;
    }
}
