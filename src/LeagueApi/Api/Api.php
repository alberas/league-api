<?php


namespace LeagueApi\Api;


use GuzzleHttp\Client;
use JMS\Serializer\Serializer;

abstract class Api implements ApiInterface
{
    private $serializer;
    private $client;

    public function __construct(Serializer $serializer, Client $client)
    {
        $this->serializer = $serializer;
        $this->client = $client;
    }

    /**
     * @param $url
     * @param $query
     * @param string $dataType
     * @return object
     */
    public function getData($url, array $query, $dataType)
    {
        $defaultQuery = $this->client->getConfig('query');

        if ($defaultQuery === null) {
            $defaultQuery = [];
        }

        $query = array_merge($query, $defaultQuery);

        $response = $this->client->request('GET', $url, ['query' => $query]);

        $json = $response->getBody()->getContents();

        return $this->serializer->deserialize($json, $dataType, 'json');
    }
}