<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\SummonerSpell;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Api\Classes\ListDto;

/**
 * Class SummonerSpellListDto
 */
class SummonerSpellListDto extends ListDto {

    /**
     * @JMS\Type("array<string, LeagueApi\Api\LolStaticData\Classes\SummonerSpell\SummonerSpellDto>")
     * @var SummonerSpellDto[] $data
     */
    protected $data;
} 