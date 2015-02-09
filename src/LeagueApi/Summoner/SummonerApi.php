<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Summoner;


use GuzzleHttp\Client;
use LeagueApi\RegionApi;
use LeagueApi\Summoner\Classes\Masteries\MasteryPagesDto;
use LeagueApi\Summoner\Classes\Runes\RunePagesDto;
use LeagueApi\Summoner\Classes\SummonerDto;

class SummonerApi extends RegionApi
{
    /**
     * @var string $classesNamespace
     */
    private $classesNamespace;

    /**
     * @var string $version
     */
    private $version = 'v1.4';

    public function __construct()
    {
        $this->classesNamespace = __NAMESPACE__ . '\\Classes\\';
    }

    protected function createClient()
    {
        return new Client(
            [
                'base_url' => ['https://{region}.api.pvp.net/api/lol/{region}/{version}/summoner/', ['region' => $this->region, 'version' => $this->version]],
                'defaults' => ['query' => ['api_key' => $this->apiKey], 'verify' => false]
            ]
        );
    }

    /**
     * @param $summonerName
     * @return SummonerDto
     */
    public function getSummonerByName($summonerName)
    {
        return $this->getData(['by-name/{summonerName}', ['summonerName' => $this->standardizeSummonerName($summonerName)]], array(), 'array<string, ' . $this->classesNamespace . 'SummonerDto' . '>')[$this->standardizeSummonerName($summonerName)];
    }

    /**
     * @param $summonerId
     * @return SummonerDto
     */
    public function getSummonerById($summonerId)
    {
        return $this->getData(['{summonerId}', ['summonerId' => $summonerId]], array(), 'array<string, ' . $this->classesNamespace . 'SummonerDto' . '>')[$summonerId];
    }

    /**
     * @param array $summonerNames
     * @return SummonerDto[]
     */
    public function getSummonersByName(array $summonerNames)
    {
        return $this->getData(['by-name/{summonerNames}', ['summonerNames' => implode(',', array_filter($summonerNames, array($this, 'standardizeSummonerName')))]], array(), 'array<string, ' . $this->classesNamespace . 'SummonerDto' . '>');
    }

    /**
     * @param array $summonerIds
     * @return SummonerDto[]
     */
    public function getSummonersById(array $summonerIds)
    {
        return $this->getData(['{summonerIds}', ['summonerIds' => $summonerIds]], array(), 'array<string, ' . $this->classesNamespace . 'SummonerDto' . '>');
    }

    /**
     * @param array $summonerIds
     * @return MasteryPagesDto
     */
    public function getMasteries(array $summonerIds)
    {
        return $this->getData(['{summonerIds}/masteries', ['summonerIds' => implode(',', $summonerIds)]], array(), 'array<string, ' . $this->classesNamespace . 'Masteries\\MasteryPagesDto' . '>');
    }

    /**
     * @param array $summonerIds
     * @return RunePagesDto
     */
    public function getRunes(array $summonerIds)
    {

        return $this->getData(['{summonerIds}/runes', ['summonerIds' => implode(',', $summonerIds)]], array(), 'array<string, ' . $this->classesNamespace . 'Runes\\RunePagesDto' . '>');
    }

    /**
     * @param array $summonerIds
     * @return array
     */
    public function getNames(array $summonerIds)
    {
        return $this->getData(['{summonerIds}/name', ['summonerIds' => implode(',', $summonerIds)]], array(), 'array<string, string>');

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