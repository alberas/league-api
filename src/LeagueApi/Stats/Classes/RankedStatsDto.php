<?php


namespace LeagueApi\Stats\Classes;

use JMS\Serializer\Annotation as JMS;

class RankedStatsDto
{
    /**
     * @JMS\Type("array<LeagueApi\Stats\Classes\ChampionStatsDto>")
     * @JMS\SerializedName("champions")
     * @var ChampionStatsDto[] $champions
     * Collection of aggregated stats summarized by champion.
     */
    private $champions;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("modifyDate")
     * @var integer $modifyDate
     * Date stats were last modified specified as epoch milliseconds.
     */
    private $modifyDate;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("summonerId")
     * @var integer $summonerId
     * Summoner ID.
     */
    private $summonerId;

    /**
     * @return ChampionStatsDto[]
     */
    public function getChampions()
    {
        return $this->champions;
    }

    /**
     * @return integer
     */
    public function getModifyDate()
    {
        return $this->modifyDate;
    }

    /**
     * @return integer
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }
}