<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi;


use GuzzleHttp\Client;

abstract class RegionApi extends AbstractApi{
    /**
     * @var string $apiKey
     */
    protected $apiKey;

    /**
     * @var string $region
     */
    protected $region;

    /**
     * @return Client
     */
    abstract protected function createClient();

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function setRegion($region)
    {
        $this->region = $region;

        $this->client = $this->createClient();

        return $this;
    }
}