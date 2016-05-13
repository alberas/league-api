<?php


namespace LeagueApi\Api;


use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\SerializerInterface;
use LeagueApi\Api\Exceptions\BadRequestException;
use LeagueApi\Api\Exceptions\ForbiddenException;
use LeagueApi\Api\Exceptions\InternalServerErrorException;
use LeagueApi\Api\Exceptions\NotFoundException;
use LeagueApi\Api\Exceptions\RateLimitExceededException;
use LeagueApi\Api\Exceptions\ServiceUnavailableException;
use LeagueApi\Api\Exceptions\UnauthorizedException;

abstract class Api
{
    /**
     * @var SerializerInterface $serializer
     */
    protected $serializer;

    /**
     * @var ClientInterface $client
     */
    protected $client;

    public function __construct(SerializerInterface $serializer, ClientInterface $client)
    {
        $this->serializer = $serializer;
        $this->client = $client;
    }

    /**
     * @param $url
     * @param array $query
     * @param string $dataType
     * @return object
     * @throws BadRequestException
     * @throws ForbiddenException
     * @throws InternalServerErrorException
     * @throws NotFoundException
     * @throws RateLimitExceededException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
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
            switch ($exception->getCode()) {
                case 400:
                    throw new BadRequestException();
                    break;
                case 401:
                    throw new UnauthorizedException();
                    break;
                case 403:
                    throw new ForbiddenException();
                    break;
                case 404:
                    throw new NotFoundException();
                    break;
                case 429:
                    throw new RateLimitExceededException();
                    break;
                case 500:
                    throw new InternalServerErrorException();
                    break;
                case 503:
                    throw new ServiceUnavailableException();
                    break;
                default:
                    throw new \LogicException(sprintf('Unknown status code "%s".', $exception->getCode()));
            }
        }
    }
}
