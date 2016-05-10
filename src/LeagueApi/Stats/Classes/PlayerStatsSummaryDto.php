<?php


namespace LeagueApi\Stats\Classes;

use JMS\Serializer\Annotation as JMS;

class PlayerStatsSummaryDto
{
    /**
     * @JMS\Type("LeagueApi\Stats\Classes\AggregatedStatsDto")
     * @JMS\SerializedName("aggregatedStats")
     * @var AggregatedStatsDto $aggregatedStats
     * Aggregated stats.
     */
    private $aggregatedStats;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("losses")
     * @var integer $losses
     * Number of losses for this queue type. Returned for ranked queue types only.
     */
    private $losses;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("modifyDate")
     * @var integer $modifyDate
     * Date stats were last modified specified as epoch milliseconds.
     */
    private $modifyDate;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("playerStatSummaryType")
     * @var string $playerStatSummaryType
     * Player stats summary type. (Legal values: AramUnranked5x5, Ascension, Bilgewater, CAP5x5, CoopVsAI, CoopVsAI3x3, CounterPick, FirstBlood1x1, FirstBlood2x2, Hexakill, KingPoro, NightmareBot, OdinUnranked, OneForAll5x5, RankedPremade3x3, RankedPremade5x5, RankedSolo5x5, RankedTeam3x3, RankedTeam5x5, SummonersRift6x6, Unranked, Unranked3x3, URF, URFBots)
     */
    private $playerStatSummaryType;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("wins")
     * @var integer $wins
     * Number of wins for this queue type.
     */
    private $wins;

    /**
     * @return AggregatedStatsDto
     */
    public function getAggregatedStats()
    {
        return $this->aggregatedStats;
    }

    /**
     * @return integer
     */
    public function getLosses()
    {
        return $this->losses;
    }

    /**
     * @return integer
     */
    public function getModifyDate()
    {
        return $this->modifyDate;
    }

    /**
     * @return string
     */
    public function getPlayerStatSummaryType()
    {
        return $this->playerStatSummaryType;
    }

    /**
     * @return integer
     */
    public function getWins()
    {
        return $this->wins;
    }
}
