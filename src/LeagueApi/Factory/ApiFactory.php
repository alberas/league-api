<?php


namespace LeagueApi\Factory;


use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use LeagueApi\Api\Api;
use LeagueApi\Champion\ChampionApi;
use LeagueApi\Game\GameApi;
use LeagueApi\LolStaticData\LolStaticDataApi;
use LeagueApi\LolStatus\LolStatusApi;
use LeagueApi\Summoner\SummonerApi;

/**
 * @method static ChampionApi ChampionApi($apiKey, $region)
 * @method static LolStaticDataApi LolStaticDataApi($apiKey, $region)
 * @method static GameApi GameApi($apiKey, $region)
 * @method static SummonerApi SummonerApi($apiKey, $region)
 * @method static LolStatusApi LolStatusApi()
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

        // Register serializer annotations
        AnnotationRegistry::registerAutoloadNamespace(
            'JMS\Serializer\Annotation',
            __DIR__ . "/../../../vendor/jms/serializer/src"
        );

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

        if ($argumentCount != 2 && $argumentCount != 0) {
            throw new \InvalidArgumentException(sprintf('Invalid argument count "%d". Arguments can be none or 2 for the different APIs', $argumentCount));
        }

        switch ($name)
        {
            case 'ChampionApi':
                $class = ChampionApi::class;
                $arguments[2] = 'v1.2';
                break;
            case 'LolStaticDataApi':
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
            default:
                throw new \InvalidArgumentException(sprintf('Unable to find api "%s".', $name));
        }

        return new $class(self::getSerializer(), call_user_func([ClientFactory::class, '__callStatic'], $name . 'Client', $arguments));
    }
}