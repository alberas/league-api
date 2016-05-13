<?php


namespace LeagueApi\Factory;


use GuzzleHttp\Psr7\Uri;

/**
 * @method static Uri ChampionApiClientUri($region, $version)
 * @method static Uri LolStaticDataApiClientUri($region, $version)
 * @method static Uri GameApiClientUri($region, $version)
 * @method static Uri SummonerApiClientUri($region, $version)
 * @method static Uri LolStatusApiClientUri()
 * @method static Uri FeaturedGamesApiClientUri($region)
 * @method static Uri LeagueApiClientUri($region, $version)
 * @method static Uri MatchApiClientUri($region, $version)
 * @method static Uri MatchListApiClientUri($region, $version)
 * @method static Uri StatsApiClientUri($region, $version)
 * @method static Uri TeamApiClientUri($region, $version)
 * @method static Uri ChampionMasteryApiClientUri($region, $platform)
 * @method static Uri CurrentGameApiClientUri($region, $platform)
 */
class UriFactory
{
    public static function __callStatic($name, $arguments)
    {
        $argumentCount = count($arguments);

        if ($argumentCount != 2 && $argumentCount != 1 && $argumentCount != 0) {
            throw new \InvalidArgumentException(sprintf('Invalid argument count "%d". Arguments can be none, one or 2 for the different URIs', $argumentCount));
        }

        switch ($name) {
            case 'ChampionApiClientUri':
                return new Uri('https://' . $arguments[0] . '.api.pvp.net/api/lol/' . $arguments[0] . '/' . $arguments[1] . '/');
            case 'LolStaticDataApiClientUri':
                return new Uri('https://' . $arguments[0] . '.api.pvp.net/api/lol/static-data/' . $arguments[0] . '/' . $arguments[1] . '/');
            case 'GameApiClientUri':
                return new Uri('https://' . $arguments[0] . '.api.pvp.net/api/lol/' . $arguments[0] . '/' . $arguments[1] . '/game/');
            case 'SummonerApiClientUri':
                return new Uri('https://' . $arguments[0] . '.api.pvp.net/api/lol/' . $arguments[0] . '/' . $arguments[1] . '/summoner/');
            case 'LolStatusApiClientUri':
                return new Uri('http://status.leagueoflegends.com');
                break;
            case 'FeaturedGamesApiClientUri':
                return new Uri('https://' . $arguments[0] . '.api.pvp.net/');
            case 'LeagueApiClientUri':
                return new Uri('https://' . $arguments[0] . '.api.pvp.net/api/lol/' . $arguments[0] . '/' . $arguments[1] . '/league/');
            case 'MatchApiClientUri':
                return new Uri('https://' . $arguments[0] . '.api.pvp.net/api/lol/' . $arguments[0] . '/' . $arguments[1] . '/match/');
            case 'MatchListApiClientUri':
                return new Uri('https://' . $arguments[0] . '.api.pvp.net/api/lol/' . $arguments[0] . '/' . $arguments[1] . '/matchlist/');
            case 'StatsApiClientUri':
                return new Uri('https://' . $arguments[0] . '.api.pvp.net/api/lol/' . $arguments[0] . '/' . $arguments[1] . '/stats/');
            case 'TeamApiClientUri':
                return new Uri('https://' . $arguments[0] . '.api.pvp.net/api/lol/' . $arguments[0] . '/' . $arguments[1] . '/team/');
            case 'ChampionMasteryApiClientUri':
                return new Uri('https://' . $arguments[0] . '.api.pvp.net/championmastery/location/' . $arguments[1] . '/');
            case 'CurrentGameApiClientUri':
                return new Uri('https://' . $arguments[0] . '.api.pvp.net/observer-mode/rest/consumer/getSpectatorGameInfo/' . $arguments[1] . '/');
            default:
                throw new \InvalidArgumentException(sprintf('Unable to find URI "%s".', $name));
        }
    }
}
