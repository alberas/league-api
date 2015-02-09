<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Champion;


use GuzzleHttp\Client;
use LeagueApi\Champion\Classes\ChampionDto;
use LeagueApi\Champion\Classes\ChampionListDto;
use LeagueApi\RegionApi;

class ChampionApi extends RegionApi{
    /**
     * @var string $classesNamespace
     */
    private $classesNamespace;

    /**
     * @var string $version
     */
    private $version = 'v1.2';

    public function __construct()
    {
        $this->classesNamespace = __NAMESPACE__ . '\\Classes\\';
    }

    protected function createClient()
    {
        return new Client(
            [
                'base_url' => ['https://{region}.api.pvp.net/api/lol/{region}/{version}/', ['region' => $this->region, 'version' => $this->version]],
                'defaults' => ['query' => ['api_key' => $this->apiKey], 'verify' => false]
            ]
        );
    }

    /**
     * @param string $freeToPlay
     * @return ChampionListDto
     */
    public function getChampions($freeToPlay = '')
    {
        return $this->getData('champion', ['freeToPlay' => $freeToPlay], $this->classesNamespace . 'ChampionListDto');
    }

    /**
     * @param $id
     * @return ChampionDto
     */
    public function getChampion($id)
    {
        return $this->getData(['champion/{id}', ['id' => $id]], [], $this->classesNamespace . 'ChampionDto');
    }
}