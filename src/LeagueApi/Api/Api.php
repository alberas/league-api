<?php


namespace LeagueApi\Api;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\Serializer;

abstract class Api
{
    protected $serializer;
    protected $client;

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
    protected function getData($url, array $query, $dataType)
    {
        $defaultQuery = $this->client->getConfig('query');

        if ($defaultQuery === null) {
            $defaultQuery = [];
        }

        $query = array_merge($query, $defaultQuery);

        try {
            $response = $this->client->request('GET', $url, ['query' => $query]);

            $json = $response->getBody()->getContents();

            return $this->serializer->deserialize($json, $dataType, 'json');
        } catch (GuzzleException $exception) {
            dump($exception->getCode());die;
        }
    }
}
