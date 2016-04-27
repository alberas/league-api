<?php


namespace LeagueApi\Factory;


use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use LeagueApi\Champion\ChampionApi;
use LeagueApi\Game\GameApi;
use LeagueApi\LolStaticData\LolStaticDataApi;
use LeagueApi\LolStatus\LolStatusApi;
use LeagueApi\Summoner\SummonerApi;

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
     * @param $apiKey
     * @param $region
     * @return ChampionApi
     */
    public static function getChampionApi($apiKey, $region)
    {
        return new ChampionApi(self::getSerializer(), ClientFactory::getChampionApiClient($apiKey, $region, 'v1.2'));
    }

    /**
     * @param $apiKey
     * @param $region
     * @return LolStaticDataApi
     */
    public static function getLolStaticDataApi($apiKey, $region)
    {
        return new LolStaticDataApi(self::getSerializer(), ClientFactory::getLolStaticDataApiClient($apiKey, $region, 'v1.2'));
    }

    /**
     * @param $apiKey
     * @param $region
     * @return GameApi
     */
    public static function getGameApi($apiKey, $region)
    {
        return new GameApi(self::getSerializer(), ClientFactory::getGameApiClient($apiKey, $region, 'v1.3'));
    }

    /**
     * @param $apiKey
     * @param $region
     * @return SummonerApi
     */
    public static function getSummonerApi($apiKey, $region)
    {
        return new SummonerApi(self::getSerializer(), ClientFactory::getSummonerApiClient($apiKey, $region, 'v1.4'));
    }

    public static function getLolStatusApi()
    {
        return new LolStatusApi(self::getSerializer(), ClientFactory::getLolStatusApiClient());
    }
}