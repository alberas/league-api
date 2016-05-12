<?php


namespace LeagueApi\Game;


use LeagueApi\Api\Api;
use LeagueApi\Game\Classes\RecentGamesDto;

class GameApi extends Api
{
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
