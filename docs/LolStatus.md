# Lol Status Api
    
##1. Instantiate API
    $lolStatusApi = new \LeagueApi\LolStatus\LolStatusApi();
    
##2. Get shards information
    $shards = $lolStatusApi->getShards();
    
##3. Get shard status by region
    $shardStatus = $lolStatusApi->getShardByRegion('na');