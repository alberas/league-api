<?php


namespace LeagueApi\Factory;


use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Uri;

class ClientFactory
{
    /**
     * @param $apiKey
     * @param $region
     * @param $version
     * @return Client
     */
    public static function getChampionApiClient($apiKey, $region, $version)
    {
        return self::createClient(UriFactory::getChampionApiUri($region, $version), $apiKey);
    }
    
    public static function getLolStaticDataApiClient($apiKey, $region, $version)
    {
        return self::createClient(UriFactory::getLolStaticDataApiUri($region, $version), $apiKey);
    }

    public static function getGameApiClient($apiKey, $region, $version)
    {
        return self::createClient(UriFactory::getGameApiUri($region, $version), $apiKey);
    }

    public static function getSummonerApiClient($apiKey, $region, $version)
    {
        return self::createClient(UriFactory::getSummonerApiUri($region, $version), $apiKey);
    }

    public static function getLolStatusApiClient()
    {
        return new Client(['base_uri' => UriFactory::getLolStatusApiUri()]);
    }

    private static function createClient(Uri $uri, $apiKey)
    {
        return new Client(
            [
                'base_uri' => $uri,
                'query' => ['api_key' => $apiKey],
                'verify' => false,
            ]
        );
    }

}