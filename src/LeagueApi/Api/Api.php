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
            switch ($exception->getCode())
            {
                case 400:
                    throw new \Exception("Bad request");
                    break;
                case 401:
                    throw new \Exception("Unauthorized");
                    break;
                case 429:
                    throw new \Exception("Rate limit exceeded");
                    break;
                case 500:
                    throw new \Exception("Internal server error");
                    break;
                case 503:
                    throw new \Exception("Service unavailable");
                    break;
                default:
                    throw new \LogicException(sprintf('Unknown status code "%s".', $exception->getCode()));
            }
        }
    }
}
