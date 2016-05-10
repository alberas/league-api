<?php


namespace LeagueApi\FeaturedGames\Classes;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\GameInfo;

class FeaturedGameInfo extends GameInfo
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("gameId")
     * @var integer $gameId
     * The ID of the game
     */
    private $gameId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("gameLength")
     * @var integer $gameLength
     * Banned champion information
     */
    private $gameLength;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("gameMode")
     * @var string $gameMode
     * The amount of time in seconds that has passed since the game started
     */
    private $gameMode;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("gameQueueConfigId")
     * @var integer $gameQueueConfigId
     * The queue type (queue types are documented on the Game Constants page)
     */
    private $gameQueueConfigId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("gameStartTime")
     * @var integer $gameStartTime
     * The game start time represented in epoch milliseconds
     */
    private $gameStartTime;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("gameType")
     * @var string $gameType
     * The game type (Legal values: CUSTOM_GAME, MATCHED_GAME, TUTORIAL_GAME)
     */
    private $gameType;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("mapId")
     * @var integer $mapId
     * The ID of the map
     */
    private $mapId;

    /**
     * @JMS\Type("LeagueApi\FeaturedGames\Classes\Observer")
     * @JMS\SerializedName("observers")
     * @var Observer $observers
     * The observer information
     */
    private $observers;

    /**
     * @JMS\Type("array<LeagueApi\FeaturedGames\Classes\Participant>")
     * @JMS\SerializedName("participants")
     * @var Participant[] $participants
     * The participant information
     */
    private $participants;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("platformId")
     * @var string $platformId
     * Banned champion information
     */
    private $platformId;

    /**
     * @return int
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @return int
     */
    public function getGameLength()
    {
        return $this->gameLength;
    }

    /**
     * @return string
     */
    public function getGameMode()
    {
        return $this->gameMode;
    }

    /**
     * @return int
     */
    public function getGameQueueConfigId()
    {
        return $this->gameQueueConfigId;
    }

    /**
     * @return int
     */
    public function getGameStartTime()
    {
        return $this->gameStartTime;
    }

    /**
     * @return string
     */
    public function getGameType()
    {
        return $this->gameType;
    }

    /**
     * @return int
     */
    public function getMapId()
    {
        return $this->mapId;
    }

    /**
     * @return Observer
     */
    public function getObservers()
    {
        return $this->observers;
    }

    /**
     * @return Participant[]
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @return string
     */
    public function getPlatformId()
    {
        return $this->platformId;
    }
}