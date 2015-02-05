<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api;


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

    public function __construct($apiKey, $region)
    {
        parent::__construct();

        $this->apiKey = $apiKey;

        $this->setRegion($region);
    }

    public function setRegion($region)
    {
        $this->region = $region;

        $this->client = $this->createClient();
    }
}