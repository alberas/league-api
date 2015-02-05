<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Api\Classes\ImageDto;
use LeagueApi\Api\Classes\Spell;

/**
 * Class ChampionSpellDto
 */
class ChampionSpellDto extends Spell{
    /**
     * @JMS\Type("array<LeagueApi\Api\Classes\ImageDto>")
     * @var ImageDto[] $altimages
     */
    protected $altimages;
} 