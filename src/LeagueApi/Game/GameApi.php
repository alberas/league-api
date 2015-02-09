<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Game;


use GuzzleHttp\Client;
use LeagueApi\Game\Classes\RecentGamesDto;
use LeagueApi\RegionApi;

class GameApi extends RegionApi{
    /**
     * @var string $classesNamespace
     */
    private $classesNamespace;

    /**
     * @var string $version
     */
    private $version = 'v1.3';

    public function __construct()
    {
        $this->classesNamespace = __NAMESPACE__ . '\\Classes\\';
    }

    protected function createClient()
    {
        return new Client(
            [
                'base_url' => ['https://{region}.api.pvp.net/api/lol/{region}/{version}/game/', ['region' => $this->region, 'version' => $this->version]],
                'defaults' => ['query' => ['api_key' => $this->apiKey], 'verify' => false]
            ]
        );
    }

    /**
     * @param $summonerId
     * @return RecentGamesDto
     */
    public function getRecentGames($summonerId)
    {
        return $this->getData(['by-summoner/{summonerId}/recent', ['summonerId' => $summonerId]], array(), $this->classesNamespace . 'RecentGamesDto');
    }
}