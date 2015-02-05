<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStatus\Classes;

use JMS\Serializer\Annotation as JMS;

class ShardStatus extends Shard{
    /**
     * @JMS\Type("array<LeagueApi\Api\LolStatus\Classes\Service>")
     * @var \LeagueApi\Api\LolStatus\Classes\Service[] $services
     */
    private $services;
}