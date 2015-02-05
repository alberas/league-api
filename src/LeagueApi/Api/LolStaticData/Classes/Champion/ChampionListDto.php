<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Api\Classes\ListDto;

class ChampionListDto extends ListDto {
    /**
     * @JMS\Type("array<string, LeagueApi\Api\LolStaticData\Classes\Champion\ChampionDto>")
     * @var \LeagueApi\Api\LolStaticData\Classes\Champion\ChampionDto[] $data
     */
    protected $data;

    /**
     * @JMS\Type("string")
     * @var string $format
     */
    private $format;

    /**
     * @JMS\Type("array<string, string>")
     * @var array $keys
     */
    private $keys;
}