<?php


namespace LeagueApi\Api;


use LeagueApi\Factory\ClientFactory;

abstract class RegionApi extends Api
{
    public function setRegion($region)
    {
        $query = $this->client->getConfig('query');

        if (is_array($query) && isset($query['api_key'])) {
            $apiKey = $query['api_key'];

            $arguments = [
                $apiKey, $region, $this->getVersion(),
            ];

            $reflect = new \ReflectionClass($this);

            $this->client = call_user_func([ClientFactory::class, '__callStatic'], $reflect->getShortName() . 'Client', $arguments);
        }
    }

    public abstract function getVersion();
}