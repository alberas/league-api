<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class Player
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("matchHistoryUri")
     * @var string $matchHistoryUri
     * Match history URI
     */
    private $matchHistoryUri;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("profileIcon")
     * @var integer $profileIcon
     * Profile icon ID
     */
    private $profileIcon;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("summonerId")
     * @var integer $summonerId
     * Summoner ID
     */
    private $summonerId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("summonerName")
     * @var string $summonerName
     * Summoner name
     */
    private $summonerName;

    /**
     * @return string
     */
    public function getMatchHistoryUri()
    {
        return $this->matchHistoryUri;
    }

    /**
     * @return int
     */
    public function getProfileIcon()
    {
        return $this->profileIcon;
    }

    /**
     * @return int
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }

    /**
     * @return string
     */
    public function getSummonerName()
    {
        return $this->summonerName;
    }
}
