<?php


namespace LeagueApi\LolStaticData\Classes\SummonerSpell;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\ListDto;

/**
 * @method SummonerSpellDto[] getData()
 */
class SummonerSpellListDto extends ListDto
{

    /**
     * @JMS\Type("array<string, LeagueApi\LolStaticData\Classes\SummonerSpell\SummonerSpellDto>")
     * @var SummonerSpellDto[] $data
     */
    protected $data;
} 