<?php


namespace LeagueApi\Stats;


use LeagueApi\Api\Api;
use LeagueApi\Stats\Classes\PlayerStatsSummaryListDto;
use LeagueApi\Stats\Classes\RankedStatsDto;

class StatsApi extends Api
{
    /**
     * @param string $summonerId
     * @param string $season
     * @return RankedStatsDto
     */
    public function getRankedStats($summonerId, $season = null)
    {
        $query = [];

        if ($season) {
            $query['season'] = $season;
        }

        return $this->getData('by-summoner/' . $summonerId . '/ranked', $query, RankedStatsDto::class);
    }

    /**
     * @param string $summonerId
     * @param string $season
     * @return PlayerStatsSummaryListDto
     */
    public function getStatsSummaries($summonerId, $season = null)
    {
        $query = [];

        if ($season) {
            $query['season'] = $season;
        }

        return $this->getData('by-summoner/' . $summonerId . '/summary', $query, PlayerStatsSummaryListDto::class);
    }
}
