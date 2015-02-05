<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Api\Classes\ImageDto;

/**
 * Class ChampionDto
 */
class ChampionDto {
    /**
     * @JMS\Type("array<string>")
     * @var array $allyTips
     */
    private $allytips;

    /**
     * @JMS\Type("string")
     * @var string $blurb
     */
    private $blurb;

    /**
     * @JMS\Type("array<string>")
     * @var array $enemyTips
     */
    private $enemytips;

    /**
     * @JMS\Type("integer")
     * @var integer $id
     */
    private $id;

    /**
     * @JMS\Type("LeagueApi\Api\Classes\ImageDto")
     * @var ImageDto $image
     */
    private $image;

    /**
     * @JMS\Type("LeagueApi\Api\LolStaticData\Classes\Champion\InfoDto")
     * @var InfoDto $info
     */
    private $info;

    /**
     * @JMS\Type("string")
     * @var string $key
     */
    private $key;

    /**
     * @JMS\Type("string")
     * @var string $lore
     */
    private $lore;

    /**
     * @JMS\Type("string")
     * @var string $name
     */
    private $name;

    /**
     * @JMS\Type("string")
     * @var string $partype
     */
    private $partype;

    /**
     * @JMS\Type("LeagueApi\Api\LolStaticData\Classes\Champion\PassiveDto")
     * @var PassiveDto $passive
     */
    private $passive;

    /**
     * @JMS\Type("array<LeagueApi\Api\LolStaticData\Classes\Champion\RecommendedDto>")
     * @var RecommendedDto[] $recommended
     */
    private $recommended;

    /**
     * @JMS\Type("array<LeagueApi\Api\LolStaticData\Classes\Champion\SkinDto>")
     * @var SkinDto[] $skins
     */
    private $skins;

    /**
     * @JMS\Type("array<LeagueApi\Api\LolStaticData\Classes\Champion\ChampionSpellDto>")
     * @var ChampionSpellDto[] $spells
     */
    private $spells;

    /**
     * @JMS\Type("LeagueApi\Api\LolStaticData\Classes\Champion\StatsDto")
     * @var StatsDto $stats
     */
    private $stats;

    /**
     * @JMS\Type("array<string>")
     * @var array $tags
     */
    private $tags;

    /**
     * @JMS\Type("string")
     * @var string $title
     */
    private $title;
} 