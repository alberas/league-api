<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\LolStaticData\Classes\Map;


use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\ListDto;

class MapListDto extends ListDto {
    /**
     * @JMS\Type("array<integer, LeagueApi\LolStaticData\Classes\Map\MapDto>")
     * @var MapDto[] $data
     */
    protected $data;
}