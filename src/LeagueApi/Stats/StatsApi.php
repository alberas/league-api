<?php


namespace LeagueApi\Stats;


use LeagueApi\Api\RegionApi;
use LeagueApi\Stats\Classes\PlayerStatsSummaryListDto;
use LeagueApi\Stats\Classes\RankedStatsDto;
use LeagueApi\Traits\VersionTrait;

class StatsApi extends RegionApi
{
    use VersionTrait;
    const VERSION = 'v1.3';

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
