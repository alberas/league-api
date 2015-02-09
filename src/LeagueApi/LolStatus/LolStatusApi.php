<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\LolStatus;


use GuzzleHttp\Client;
use JMS\Serializer\Serializer;
use LeagueApi\AbstractApi;
use LeagueApi\LolStatus\Classes\Shard;
use LeagueApi\LolStatus\Classes\ShardStatus;

class LolStatusApi extends AbstractApi {
    /**
     * @var string $classesNamespace
     */
    private $classesNamespace;

    public function __construct()
    {
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