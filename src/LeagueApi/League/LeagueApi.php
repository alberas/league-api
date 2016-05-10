<?php


namespace LeagueApi\League;


use LeagueApi\Api\Api;
use LeagueApi\League\Classes\LeagueDto;

class LeagueApi extends Api
{
    /**
     * @param array $summonerIds
     * @return LeagueDto[]
     */
    public function getLeagues(array $summonerIds)
    {
        return $this->getData('by-summoner/' . implode(',', $summonerIds), [], 'array<string, array<' . LeagueDto::class . '>>');
    }

    /**
     * @param array $summonerIds
     * @return LeagueDto[]
     */
    public function getLeagueEntries(array $summonerIds)
    {
        return $this->getData('by-summoner/' . implode(',', $summonerIds) . '/entry', [], 'array<string, array<' . LeagueDto::class . '>>');
    }

    /**
     * @param array $teamIds
     * @return LeagueDto[]
     */
    public function getTeamLeagues(array $teamIds)
    {
        return $this->getData('by-team/' . implode(',', $teamIds), [], 'array<string, array<' . LeagueDto::class . '>>');
    }

    /**
     * @param array $teamIds
     * @return LeagueDto[]
     */
    public function getTeamLeagueEntries(array $teamIds)
    {
        return $this->getData('by-team/' . implode(',', $teamIds) . '/entry', [], 'array<string, array<' . LeagueDto::class . '>>');
    }

    /**
     * @param string $type One of the constants in LeagueType
     * @return LeagueDto
     */
    public function getChallenger($type)
    {
        return $this->getData('challenger', ['type' => $type], LeagueDto::class);
    }

    /**
     * @param string $type One of the constants in LeagueType
     * @return LeagueDto
     */
    public function getMaster($type)
    {
        return $this->getData('master', ['type' => $type], LeagueDto::class);
    }
}
