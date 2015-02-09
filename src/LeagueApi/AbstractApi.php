<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi;


use GuzzleHttp\Client;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

abstract class AbstractApi {
    /**
     * @var Client $client
     */
    protected $client;

    /**
     * @var Serializer $serializer
     */
    protected $serializer;

    public function __construct(Serializer $serializer = null)
    {
        if ($serializer instanceof Serializer){
            $this->serializer = $serializer;
        } else {
            $this->serializer = SerializerBuilder::create()->build();
        }
    }

    /**
     * @param $url
     * @param $query
     * @param string $dataType
     * @param bool $dumpJson
     * @return mixed
     */
    protected function getData($url, $query, $dataType, $dumpJson = false)
    {
        $response = $this->client->get($url, ['query' => array_filter($query)]);

        $json = $response->getBody()->getContents();

        if ($dumpJson){
            dump($json);
        }

        return $this->serializer->deserialize($json, $dataType, 'json');
    }
}