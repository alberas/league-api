<?php


namespace LeagueApi\Game;


use LeagueApi\Api\RegionApi;
use LeagueApi\Game\Classes\RecentGamesDto;
use LeagueApi\Traits\VersionTrait;

class GameApi extends RegionApi
{
    use VersionTrait;
    const VERSION = 'v1.3';

    /**
     * @param $summonerId
     * @return RecentGamesDto
     */
    public function getRecentGames($summonerId)
    {
        return $this->getData('by-summoner/' . $summonerId . '/recent', [], RecentGamesDto::class);
    }
}
