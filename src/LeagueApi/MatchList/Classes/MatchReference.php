<?php


namespace LeagueApi\MatchList\Classes;

use JMS\Serializer\Annotation as JMS;

class MatchReference
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("champion")
     * @var integer $champion
     */
    private $champion;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("lane")
     * @var string $lane
     * Legal values: MID, MIDDLE, TOP, JUNGLE, BOT, BOTTOM
     */
    private $lane;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("matchId")
     * @var integer $matchId
     */
    private $matchId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("platformId")
     * @var string $platformId
     */
    private $platformId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("queue")
     * @var string $queue
     * Legal values: TEAM_BUILDER_DRAFT_RANKED_5x5, RANKED_SOLO_5x5, RANKED_TEAM_3x3, RANKED_TEAM_5x5
     */
    private $queue;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("region")
     * @var string $region
     */
    private $region;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("role")
     * @var string $role
     * Legal values: DUO, NONE, SOLO, DUO_CARRY, DUO_SUPPORT
     */
    private $role;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("season")
     * @var string $season
     * Legal values: PRESEASON3, SEASON3, PRESEASON2014, SEASON2014, PRESEASON2015, SEASON2015, PRESEASON2016, SEASON2016
     */
    private $season;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("timestamp")
     * @var integer $timestamp
     */
    private $timestamp;

    /**
     * @return int
     */
    public function getChampion()
    {
        return $this->champion;
    }

    /**
     * @return string
     */
    public function getLane()
    {
        return $this->lane;
    }

    /**
     * @return int
     */
    public function getMatchId()
    {
        return $this->matchId;
    }

    /**
     * @return string
     */
    public function getPlatformId()
    {
        return $this->platformId;
    }

    /**
     * @return string
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return string
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
