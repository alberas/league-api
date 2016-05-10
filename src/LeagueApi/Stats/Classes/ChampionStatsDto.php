<?php


namespace LeagueApi\Stats\Classes;

use JMS\Serializer\Annotation as JMS;

class ChampionStatsDto
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     * @var integer $id
     * Champion ID. Note that champion ID 0 represents the combined stats for all champions. For static information correlating to champion IDs, please refer to the LoL Static Data API.
     */
    private $id;

    /**
     * @JMS\Type("LeagueApi\Stats\Classes\AggregatedStatsDto")
     * @JMS\SerializedName("stats")
     * @var AggregatedStatsDto $stats
     * Aggregated stats associated with the champion.
     */
    private $stats;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return AggregatedStatsDto
     */
    public function getStats()
    {
        return $this->stats;
    }
}