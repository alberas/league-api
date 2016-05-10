<?php


namespace LeagueApi\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\ImageDto;

/**
 * Class ChampionDto
 */
class ChampionDto
{
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
     * @JMS\Type("LeagueApi\Classes\ImageDto")
     * @var ImageDto $image
     */
    private $image;

    /**
     * @JMS\Type("LeagueApi\LolStaticData\Classes\Champion\InfoDto")
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
     * @JMS\Type("LeagueApi\LolStaticData\Classes\Champion\PassiveDto")
     * @var PassiveDto $passive
     */
    private $passive;

    /**
     * @JMS\Type("array<LeagueApi\LolStaticData\Classes\Champion\RecommendedDto>")
     * @var RecommendedDto[] $recommended
     */
    private $recommended;

    /**
     * @JMS\Type("array<LeagueApi\LolStaticData\Classes\Champion\SkinDto>")
     * @var SkinDto[] $skins
     */
    private $skins;

    /**
     * @JMS\Type("array<LeagueApi\LolStaticData\Classes\Champion\ChampionSpellDto>")
     * @var ChampionSpellDto[] $spells
     */
    private $spells;

    /**
     * @JMS\Type("LeagueApi\LolStaticData\Classes\Champion\StatsDto")
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

    /**
     * @return array
     */
    public function getAllytips()
    {
        return $this->allytips;
    }

    /**
     * @return string
     */
    public function getBlurb()
    {
        return $this->blurb;
    }

    /**
     * @return array
     */
    public function getEnemytips()
    {
        return $this->enemytips;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return ImageDto
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return InfoDto
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getLore()
    {
        return $this->lore;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPartype()
    {
        return $this->partype;
    }

    /**
     * @return PassiveDto
     */
    public function getPassive()
    {
        return $this->passive;
    }

    /**
     * @return RecommendedDto[]
     */
    public function getRecommended()
    {
        return $this->recommended;
    }

    /**
     * @return SkinDto[]
     */
    public function getSkins()
    {
        return $this->skins;
    }

    /**
     * @return ChampionSpellDto[]
     */
    public function getSpells()
    {
        return $this->spells;
    }

    /**
     * @return StatsDto
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
