<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Summoner;


use LeagueApi\Api\Api;
use LeagueApi\Summoner\Classes\Masteries\MasteryPagesDto;
use LeagueApi\Summoner\Classes\Runes\RunePagesDto;
use LeagueApi\Summoner\Classes\SummonerDto;

class SummonerApi extends Api
{
    /**
     * @param $summonerName
     * @return SummonerDto
     */
    public function getSummonerByName($summonerName)
    {
        $url = 'by-name/' . $this->standardizeSummonerName($summonerName);
        $dataType = sprintf('array<string, %s>', SummonerDto::class);

        return $this->getData($url, [], $dataType)[$this->standardizeSummonerName($summonerName)];
    }

    /**
     * @param $summonerId
     * @return SummonerDto
     */
    public function getSummonerById($summonerId)
    {
        $dataType = sprintf('array<string, %s>', SummonerDto::class);

        return $this->getData($summonerId, [], $dataType)[$summonerId];
    }

    /**
     * @param array $summonerNames
     * @return SummonerDto[]
     */
    public function getSummonersByName(array $summonerNames)
    {
        $url = 'by-name/' . implode(',', array_filter($summonerNames, [$this, 'standardizeSummonerName']));
        $dataType = sprintf('array<string, %s>', SummonerDto::class);

        return $this->getData($url, [], $dataType);
    }

    /**
     * @param array $summonerIds
     * @return SummonerDto[]
     */
    public function getSummonersById(array $summonerIds)
    {
        $url = implode(',', $summonerIds);
        $dataType = sprintf('array<string, %s>', SummonerDto::class);

        return $this->getData($url, [], $dataType);
    }

    /**
     * @param array $summonerIds
     * @return MasteryPagesDto
     */
    public function getMasteries(array $summonerIds)
    {
        $url = implode(',', $summonerIds) . '/masteries';

        $dataType = sprintf('array<string, %s>', MasteryPagesDto::class);

        return $this->getData($url, [], $dataType);
    }

    /**
     * @param array $summonerIds
     * @return RunePagesDto
     */
    public function getRunes(array $summonerIds)
    {

        $url = implode(',', $summonerIds) . '/runes';
        $dataType = sprintf('array<string, %s>', RunePagesDto::class);

        return $this->getData($url, [], $dataType);
    }

    /**
     * @param array $summonerIds
     * @return array
     */
    public function getNames(array $summonerIds)
    {
        $url = implode(',', $summonerIds) . '/name';
        $dataType = 'array<string, string>';

        return $this->getData($url, [], $dataType);

    }

    /**
     * Standardized summoner name is the summoner name in all lower case and with spaces removed.
     * @param $summonerName
     * @return string
     */
    private function standardizeSummonerName($summonerName)
    {
        return str_replace(' ', '', strtolower($summonerName));
    }
}