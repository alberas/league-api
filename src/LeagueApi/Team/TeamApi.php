<?php


namespace LeagueApi\Team;


use LeagueApi\Api\RegionApi;
use LeagueApi\Team\Classes\TeamDto;
use LeagueApi\Traits\VersionTrait;

class TeamApi extends RegionApi
{
    use VersionTrait;
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
