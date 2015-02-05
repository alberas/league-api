<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Map;


use JMS\Serializer\Annotation as JMS;
use LeagueApi\Api\Classes\ListDto;

class MapListDto extends ListDto {
    /**
     * @JMS\Type("array<integer, LeagueApi\Api\LolStaticData\Classes\Map\MapDto>")
     * @var MapDto[] $data
     */
    protected $data;
}