<?php


namespace LeagueApi\Factory;


use GuzzleHttp\Psr7\Uri;

class UriFactory
{
    public static function getChampionApiUri($region, $version)
    {
        return new Uri('https://global.api.pvp.net/api/lol/' . $region . '/' . $version . '/');
    }
    
    public static function getLolStaticDataApiUri($region, $version)
    {
        return new Uri('https://global.api.pvp.net/api/lol/static-data/' . $region . '/' . $version . '/');
    }

    public static function getGameApiUri($region, $version)
    {
        return new Uri('https://global.api.pvp.net/api/lol/' . $region . '/' . $version . '/game/');
    }

    public static function getSummonerApiUri($region, $version)
    {
        return new Uri('https://global.api.pvp.net/api/lol/' . $region . '/' . $version . '/summoner/');
    }

    public static function getLolStatusApiUri()
    {
        return new Uri('http://status.leagueoflegends.com');
    }
}