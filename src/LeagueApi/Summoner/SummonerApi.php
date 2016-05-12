<?php


namespace LeagueApi\Summoner;


use LeagueApi\Api\Api;
use LeagueApi\Api\Exceptions\NotFoundException;
use LeagueApi\Api\RegionApi;
use LeagueApi\Summoner\Classes\Masteries\MasteryPagesDto;
use LeagueApi\Summoner\Classes\Runes\RunePagesDto;
use LeagueApi\Summoner\Classes\SummonerDto;
use LeagueApi\Summoner\Exceptions\SummonerNotFoundException;

class SummonerApi extends RegionApi
{
    const VERSION = 'v1.4';

    /**
     * @param $summonerName
     * @return SummonerDto
     * @throws SummonerNotFoundException
     */
    public function getSummonerByName($summonerName)
    {
        $url = 'by-name/' . $this->standardizeSummonerName($summonerName);
        $dataType = sprintf('array<string, %s>', SummonerDto::class);

        try {
            return $this->getData($url, [], $dataType)[$this->standardizeSummonerName($summonerName)];
        } catch (NotFoundException $e) {
            throw new SummonerNotFoundException();
        }
    }

    /**
     * @param $summonerId
     * @return SummonerDto
     * @throws SummonerNotFoundException
     */
    public function getSummonerById($summonerId)
    {
        $dataType = sprintf('array<string, %s>', SummonerDto::class);

        try {
            return $this->getData($summonerId, [], $dataType)[$summonerId];
        } catch (NotFoundException $e) {
            throw new SummonerNotFoundException();
        }
    }

    /**
     * @param array $summonerNames
     * @return Classes\SummonerDto[]
     * @throws SummonerNotFoundException
     */
    public function getSummonersByName(array $summonerNames)
    {
        $url = 'by-name/' . implode(',', array_filter($summonerNames, [$this, 'standardizeSummonerName']));
        $dataType = sprintf('array<string, %s>', SummonerDto::class);

        try {
            return $this->getData($url, [], $dataType);
        } catch (NotFoundException $e) {
            throw new SummonerNotFoundException();
        }
    }

    /**
     * @param array $summonerIds
     * @return Classes\SummonerDto[]
     * @throws SummonerNotFoundException
     */
    public function getSummonersById(array $summonerIds)
    {
        $url = implode(',', $summonerIds);
        $dataType = sprintf('array<string, %s>', SummonerDto::class);

        try {
            return $this->getData($url, [], $dataType);
        } catch (NotFoundException $e) {
            throw new SummonerNotFoundException();
        }
    }

    /**
     * @param array $summonerIds
     * @return MasteryPagesDto
     * @throws SummonerNotFoundException
     */
    public function getMasteries(array $summonerIds)
    {
        $url = implode(',', $summonerIds) . '/masteries';

        $dataType = sprintf('array<string, %s>', MasteryPagesDto::class);

        try {
            return $this->getData($url, [], $dataType);
        } catch (NotFoundException $e) {
            throw new SummonerNotFoundException();
        }
    }

    /**
     * @param array $summonerIds
     * @return RunePagesDto
     * @throws SummonerNotFoundException
     */
    public function getRunes(array $summonerIds)
    {

        $url = implode(',', $summonerIds) . '/runes';
        $dataType = sprintf('array<string, %s>', RunePagesDto::class);

        try {
            return $this->getData($url, [], $dataType);
        } catch (NotFoundException $e) {
            throw new SummonerNotFoundException();
        }
    }

    /**
     * @param array $summonerIds
     * @return array
     * @throws SummonerNotFoundException
     */
    public function getNames(array $summonerIds)
    {
        $url = implode(',', $summonerIds) . '/name';
        $dataType = 'array<string, string>';

        try {
            return $this->getData($url, [], $dataType);
        } catch (NotFoundException $e) {
            throw new SummonerNotFoundException();
        }
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

    public function getVersion()
    {
        return self::VERSION;
    }
}
