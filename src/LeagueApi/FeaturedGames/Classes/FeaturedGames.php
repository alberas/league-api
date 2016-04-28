<?php


namespace LeagueApi\FeaturedGames\Classes;

use JMS\Serializer\Annotation as JMS;

class FeaturedGames
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("clientRefreshInterval")
     * @var integer $clientRefreshInterval
     * The suggested interval to wait before requesting FeaturedGames again
     */
    private $clientRefreshInterval;

    /**
     * @JMS\Type("array<LeagueApi\FeaturedGames\Classes\FeaturedGameInfo>")
     * @JMS\SerializedName("gameList")
     * @var FeaturedGameInfo[] $gameList
     * The list of featured games.
     */
    private $gameList;

    /**
     * @return int
     */
    public function getClientRefreshInterval()
    {
        return $this->clientRefreshInterval;
    }

    /**
     * @return FeaturedGameInfo[]
     */
    public function getGameList()
    {
        return $this->gameList;
    }
}