<?php


namespace LeagueApi\CurrentGame;


use LeagueApi\Api\RegionApi;
use LeagueApi\CurrentGame\Classes\CurrentGameInfo;

class CurrentGameApi extends RegionApi
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
