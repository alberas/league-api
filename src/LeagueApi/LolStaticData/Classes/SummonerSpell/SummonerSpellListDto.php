<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\LolStaticData\Classes\SummonerSpell;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\ListDto;

/**
 * Class SummonerSpellListDto
 */
class SummonerSpellListDto extends ListDto {

    /**
     * @JMS\Type("array<string, LeagueApi\LolStaticData\Classes\SummonerSpell\SummonerSpellDto>")
     * @var SummonerSpellDto[] $data
     */
    protected $data;
} 