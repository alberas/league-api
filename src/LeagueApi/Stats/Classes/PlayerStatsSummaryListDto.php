<?php


namespace LeagueApi\Stats\Classes;

use JMS\Serializer\Annotation as JMS;

class PlayerStatsSummaryListDto
{
    /**
     * @JMS\Type("array<LeagueApi\Stats\Classes\PlayerStatsSummaryDto>")
     * @JMS\SerializedName("playerStatSummaries")
     * @var PlayerStatsSummaryDto[] $playerStatSummaries
     * Collection of player stats summaries associated with the summoner.
     */
    private $playerStatSummaries;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("summonerId")
     * @var integer $summonerId
     * Summoner ID.
     */
    private $summonerId;

    /**
     * @return PlayerStatsSummaryDto[]
     */
    public function getPlayerStatSummaries()
    {
        return $this->playerStatSummaries;
    }

    /**
     * @return int
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }
}