<?php


namespace LeagueApi\Factory;


use GuzzleHttp\Psr7\Uri;

/**
 * @method static Uri ChampionApiClientUri($region, $version)
 * @method static Uri LolStaticDataApiClientUri($region, $version)
 * @method static Uri GameApiClientUri($region, $version)
 * @method static Uri SummonerApiClientUri($region, $version)
 * @method static Uri LolStatusApiClientUri()
 */
class UriFactory
{
    public static function __callStatic($name, $arguments)
    {
        $argumentCount = count($arguments);

        if ($argumentCount != 2 && $argumentCount != 0) {
            throw new \InvalidArgumentException(sprintf('Invalid argument count "%d". Arguments can be none or 2 for the different URIs', $argumentCount));
        }

        switch ($name)
        {
            case 'ChampionApiClientUri':
                return new Uri('https://global.api.pvp.net/api/lol/' . $arguments[0] . '/' . $arguments[1] . '/');
                break;
            case 'LolStaticDataApiClientUri':
                return new Uri('https://global.api.pvp.net/api/lol/static-data/' . $arguments[0] . '/' . $arguments[1] . '/');
                break;
            case 'GameApiClientUri':
                return new Uri('https://global.api.pvp.net/api/lol/' . $arguments[0] . '/' . $arguments[1] . '/game/');
                break;
            case 'SummonerApiClientUri':
                return new Uri('https://global.api.pvp.net/api/lol/' . $arguments[0] . '/' . $arguments[1] . '/summoner/');
                break;
            case 'LolStatusApiClientUri':
                return new Uri('http://status.leagueoflegends.com');
                break;
            default:
                throw new \InvalidArgumentException(sprintf('Unable to find URI "%s".', $name));
        }
    }
}