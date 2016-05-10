<?php


namespace LeagueApi\LolStatus;


use LeagueApi\Api\Api;
use LeagueApi\LolStatus\Classes\Shard;
use LeagueApi\LolStatus\Classes\ShardStatus;

class LolStatusApi extends Api
{

    /**
     * @return Shard[]
     */
    public function getShards()
    {
        return $this->getData('shards', [], 'array<' . Shard::class . '>');
    }

    /**
     * @param $region
     * @return ShardStatus
     */
    public function getShardByRegion($region)
    {
        return $this->getData('/shards/' . $region, [], ShardStatus::class);
    }

}
