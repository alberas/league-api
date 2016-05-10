<?php


namespace LeagueApi\CurrentGame;


use LeagueApi\Api\Api;
use LeagueApi\CurrentGame\Classes\CurrentGameInfo;

class CurrentGameApi extends Api
{
    /**
     * @param string $summonerId The ID of the summoner.
     * @return CurrentGameInfo
     */
    public function getCurrentGame($summonerId)
    {
        return $this->getData($summonerId, [], CurrentGameInfo::class);
    }
}
