<?php


namespace LeagueApi\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\ImageDto;
use LeagueApi\Classes\Spell;

/**
 * Class ChampionSpellDto
 */
class ChampionSpellDto extends Spell
{
    /**
     * @JMS\Type("array<LeagueApi\Classes\ImageDto>")
     * @var ImageDto[] $altimages
     */
    protected $altimages;
}
