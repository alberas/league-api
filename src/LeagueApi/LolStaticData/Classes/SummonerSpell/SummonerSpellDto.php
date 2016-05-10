<?php


namespace LeagueApi\LolStaticData\Classes\SummonerSpell;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\Spell;

/**
 * Class SummonerSpellDto
 */
class SummonerSpellDto extends Spell
{

    /**
     * @JMS\Type("integer")
     * @var integer $id
     */
    private $id;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("summonerLevel")
     * @var integer $summonerLevel
     */
    private $summonerLevel;

    /**
     * @JMS\Type("array<string>")
     * @var string[] $modes
     */
    private $modes;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getSummonerLevel()
    {
        return $this->summonerLevel;
    }

    /**
     * @return \string[]
     */
    public function getModes()
    {
        return $this->modes;
    }
} 