<?php


namespace LeagueApi\Team;


use LeagueApi\Api\Api;
use LeagueApi\Team\Classes\TeamDto;

class TeamApi extends Api
{
    const VERSION = 'v2.4';
    
    /**
     * @param array $summonerIds
     * @return TeamDto
     */
    public function getTeamBySummoners(array $summonerIds)
    {
        return $this->getData('by-summoner/' . implode(',', $summonerIds), [], 'array<string, array<' . TeamDto::class . '>>');
    }

    /**
     * @param array $teamIds
     * @return TeamDto
     */
    public function getTeams(array $teamIds)
    {
        return $this->getData(implode(',', $teamIds), [], 'array<string,' . TeamDto::class . '>');
    }
}
