<?php


namespace LeagueApi\Team;


use LeagueApi\Api\Api;
use LeagueApi\Team\Classes\TeamDto;

class TeamApi extends Api
{
    public function getTeamBySummoners(array $summonerIds)
    {
        return $this->getData('by-summoner/' . implode(',', $summonerIds), [], 'array<string, array<' . TeamDto::class . '>>');
    }

    public function getTeams(array $teamIds)
    {
        return $this->getData(implode(',', $teamIds), [], 'array<string,' . TeamDto::class . '>');
    }
}