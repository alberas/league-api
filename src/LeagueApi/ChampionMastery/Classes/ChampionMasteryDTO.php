<?php


namespace LeagueApi\ChampionMastery\Classes;

use JMS\Serializer\Annotation as JMS;

class ChampionMasteryDTO
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("championId")
     * @var integer $championId
     * Champion ID for this entry.
     */
    private $championId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("championLevel")
     * @var integer $championLevel
     * Champion level for specified player and champion combination.
     */
    private $championLevel;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("championPoints")
     * @var integer $championPoints
     * Total number of champion points for this player and champion combination - they are used to determine championLevel.
     */
    private $championPoints;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("championPointsSinceLastLevel")
     * @var integer $championPointsSinceLastLevel
     * Number of points earned since current level has been achieved. Zero if player reached maximum champion level for this champion.
     */
    private $championPointsSinceLastLevel;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("championPointsUntilNextLevel")
     * @var integer $championPointsUntilNextLevel
     * Number of points needed to achieve next level. Zero if player reached maximum champion level for this champion.
     */
    private $championPointsUntilNextLevel;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("chestGranted")
     * @var boolean $chestGranted
     * Is chest granted for this champion or not in current season.
     */
    private $chestGranted;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("highestGrade")
     * @var string $highestGrade
     * The highest grade of this champion of current season.
     */
    private $highestGrade;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("lastPlayTime")
     * @var integer $lastPlayTime
     * Last time this champion was played by this player - in Unix milliseconds time format.
     */
    private $lastPlayTime;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("playerId")
     * @var integer $playerId
     * Player ID for this entry.
     */
    private $playerId;

    /**
     * @return integer
     */
    public function getChampionId()
    {
        return $this->championId;
    }

    /**
     * @return integer
     */
    public function getChampionLevel()
    {
        return $this->championLevel;
    }

    /**
     * @return integer
     */
    public function getChampionPoints()
    {
        return $this->championPoints;
    }

    /**
     * @return integer
     */
    public function getChampionPointsSinceLastLevel()
    {
        return $this->championPointsSinceLastLevel;
    }

    /**
     * @return integer
     */
    public function getChampionPointsUntilNextLevel()
    {
        return $this->championPointsUntilNextLevel;
    }

    /**
     * @return boolean
     */
    public function isChestGranted()
    {
        return $this->chestGranted;
    }

    /**
     * @return string
     */
    public function getHighestGrade()
    {
        return $this->highestGrade;
    }

    /**
     * @return integer
     */
    public function getLastPlayTime()
    {
        return $this->lastPlayTime;
    }

    /**
     * @return integer
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }
}
