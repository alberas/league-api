<?php


namespace LeagueApi\Factory;


use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use LeagueApi\Api\Api;
use LeagueApi\Champion\ChampionApi;
use LeagueApi\ChampionMastery\ChampionMasteryApi;
use LeagueApi\FeaturedGames\FeaturedGamesApi;
use LeagueApi\Game\GameApi;
use LeagueApi\League\LeagueApi;
use LeagueApi\LolStaticData\LolStaticDataApi;
use LeagueApi\LolStatus\LolStatusApi;
use LeagueApi\Match\MatchApi;
use LeagueApi\MatchList\MatchListApi;
use LeagueApi\Stats\StatsApi;
use LeagueApi\Summoner\SummonerApi;
use LeagueApi\Team\TeamApi;

/**
 * @method static ChampionApi ChampionApi($apiKey, $region)
 * @method static LolStaticDataApi LolStaticDataApi($apiKey, $region, $cacheDirectory)
 * @method static GameApi GameApi($apiKey, $region)
 * @method static SummonerApi SummonerApi($apiKey, $region)
 * @method static LolStatusApi LolStatusApi()
 * @method static FeaturedGamesApi FeaturedGamesApi($apiKey, $region)
 * @method static LeagueApi LeagueApi($apiKey, $region)
 * @method static MatchApi MatchApi($apiKey, $region)
 * @method static MatchListApi MatchListApi($apiKey, $region)
 * @method static StatsApi StatsApi($apiKey, $region)
 * @method static TeamApi TeamApi($apiKey, $region)
 * @method static ChampionMasteryApi ChampionMasteryApi($apiKey, $platformId)
 */
class ApiFactory
{
    /**
     * @var Serializer $serializer
     */
    private static $serializer;

    private static function getSerializer()
    {
        if (self::$serializer instanceof Serializer) {
            return self::$serializer;
        }

        self::$serializer = SerializerBuilder::create()->build();

        return self::$serializer;
    }

    /**
     * Static magic method __callStatic in order to create different API`s
     * @param string $name Called method
     * @param array $arguments Method arguments
     * @return Api
     */
    public static function __callStatic($name, $arguments)
    {
        $argumentCount = count($arguments);

        if ($argumentCount != 3 && $argumentCount != 2 && $argumentCount != 0) {
            throw new \InvalidArgumentException(sprintf('Invalid argument count "%d". Arguments can be none, two or three for the different APIs', $argumentCount));
        }

        switch ($name)
        {
            case 'ChampionApi':
                $class = ChampionApi::class;
                $arguments[2] = 'v1.2';
                break;
            case 'LolStaticDataApi':
                $cacheDirectory = $arguments[2];
                $class = LolStaticDataApi::class;
                $arguments[2] = 'v1.2';
                break;
            case 'GameApi':
                $class = GameApi::class;
                $arguments[2] = 'v1.3';
                break;
            case 'SummonerApi':
                $class = SummonerApi::class;
                $arguments[2] = 'v1.4';
                break;
            case 'LolStatusApi':
                $class = LolStatusApi::class;
                break;
            case 'FeaturedGamesApi':
                $class = FeaturedGamesApi::class;
                break;
            case 'LeagueApi':
                $class = LeagueApi::class;
                $arguments[2] = 'v2.5';
                break;
            case 'MatchApi':
                $class = MatchApi::class;
                $arguments[2] = 'v2.2';
                break;
            case 'MatchListApi':
                $class = MatchListApi::class;
                $arguments[2] = 'v2.2';
                break;
            case 'StatsApi':
                $class = StatsApi::class;
                $arguments[2] = 'v1.3';
                break;
            case 'TeamApi':
                $class = TeamApi::class;
                $arguments[2] = 'v2.4';
                break;
            case 'ChampionMasteryApi':
                $class = ChampionMasteryApi::class;
                break;
            default:
                throw new \InvalidArgumentException(sprintf('Unable to find API "%s".', $name));
        }

        if (isset($cacheDirectory)) {
            return new $class(self::getSerializer(), call_user_func([ClientFactory::class, '__callStatic'], $name . 'Client', $arguments), $cacheDirectory);
        }

        return new $class(self::getSerializer(), call_user_func([ClientFactory::class, '__callStatic'], $name . 'Client', $arguments));
    }
}