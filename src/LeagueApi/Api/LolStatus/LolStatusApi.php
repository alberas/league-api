<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStatus;


use GuzzleHttp\Client;
use LeagueApi\Api\AbstractApi;
use LeagueApi\Api\LolStatus\Classes\Shard;
use LeagueApi\Api\LolStatus\Classes\ShardStatus;

class LolStatusApi extends AbstractApi {
    /**
     * @var string $classesNamespace
     */
    private $classesNamespace;

    public function __construct()
    {
        parent::__construct();
        $this->classesNamespace = __NAMESPACE__ . '\\Classes\\';
        $this->client = new Client(['base_url' => 'http://status.leagueoflegends.com']);
    }

    /**
     * @return Shard[]
     */
    public function getShards()
    {
        return $this->getData('shards', array(), 'array<' . $this->classesNamespace . 'Shard>');
    }

    /**
     * @param $region
     * @return ShardStatus
     */
    public function getShardByRegion($region)
    {
        return $this->getData(['/shards/{region}', ['region' => $region]], array(), $this->classesNamespace . 'ShardStatus');
    }
}