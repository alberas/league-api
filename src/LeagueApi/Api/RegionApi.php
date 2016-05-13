<?php


namespace LeagueApi\Api;


use LeagueApi\Api\Enumerations\Platform;
use LeagueApi\Factory\ClientFactory;
use LeagueApi\Traits\VersionTrait;

abstract class RegionApi extends Api
{
    protected $region;

    public function setRegion($region)
    {
        $this->region = $region;

        $query = $this->client->getConfig('query');

        if (is_array($query) && isset($query['api_key'])) {
            $apiKey = $query['api_key'];

            $arguments = [
                $apiKey, $region,
            ];

            $reflection = new \ReflectionClass($this);

            if (in_array(VersionTrait::class, $reflection->getTraitNames()) && method_exists($this, 'getVersion')) {
                $arguments[] = $this->getVersion();
            }

            if ($reflection->getShortName() == 'ChampionMasteryApi' || $reflection->getShortName() == 'CurrentGameApiClient') {
                $arguments[] = Platform::getPlatformByRegion($region);
            }

            $this->client = call_user_func([ClientFactory::class, '__callStatic'], $reflection->getShortName() . 'Client', $arguments);
        }
    }
}
