<?php


namespace LeagueApi\Factory;


use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Uri;

/**
 * @method static Client ChampionApiClient($apiKey, $region, $version)
 * @method static Client LolStaticDataApiClient($apiKey, $region, $version)
 * @method static Client GameApiClient($apiKey, $region, $version)
 * @method static Client SummonerApiClient($apiKey, $region, $version)
 * @method static Client LolStatusApiClient($apiKey, $region, $version)
 *
 */
class ClientFactory
{
    public static function __callStatic($name, $arguments)
    {
        $argumentCount = count($arguments);

        if ($argumentCount != 3 && $argumentCount !=2 && $argumentCount != 0) {
            throw new \InvalidArgumentException(sprintf('Invalid argument count "%d". Arguments can be none or 3 for the different Clients', $argumentCount));
        }

        $uriArguments = [];

        switch ($name)
        {
            case 'ChampionApiClient':
                $uriArguments = [$arguments[1], $arguments[2]];
                break;
            case 'LolStaticDataApiClient':
                $uriArguments = [$arguments[1], $arguments[2]];
                break;
            case 'GameApiClient':
                $uriArguments = [$arguments[1], $arguments[2]];
                break;
            case 'SummonerApiClient':
                $uriArguments = [$arguments[1], $arguments[2]];
                break;
            case 'LolStatusApiClient':
                $arguments[0] = false;
                break;
            case 'FeaturedGamesApiClient':
                $uriArguments = [$arguments[1]];
                break;
            case 'LeagueApiClient':
                $uriArguments = [$arguments[1], $arguments[2]];
                break;
            case 'MatchApiClient':
                $uriArguments = [$arguments[1], $arguments[2]];
                break;
            case 'MatchListApiClient':
                $uriArguments = [$arguments[1], $arguments[2]];
                break;
            case 'StatsApiClient':
                $uriArguments = [$arguments[1], $arguments[2]];
                break;
            default:
                throw new \InvalidArgumentException(sprintf('Unable to find client "%s".', $name));
        }
        
        return self::createClient(call_user_func([UriFactory::class, '__callStatic'], $name . 'Uri', $uriArguments), $arguments[0]);
    }

    private static function createClient(Uri $uri, $apiKey = false)
    {
        $config = [
            'base_uri' => $uri,
            'verify' => false,
        ];

        if ($apiKey) {
            $config['query'] = ['api_key' => $apiKey];
        }

        return new Client($config);
    }

}