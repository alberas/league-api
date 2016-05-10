<?php


namespace LeagueApi\Team\Classes;

use JMS\Serializer\Annotation as JMS;

class TeamStatDetailDto
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("averageGamesPlayed")
     * @var integer $averageGamesPlayed
     */
    private $averageGamesPlayed;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("losses")
     * @var integer $losses
     */
    private $losses;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("teamStatType")
     * @var string $teamStatType
     */
    private $teamStatType;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("wins")
     * @var integer $wins
     */
    private $wins;

    /**
     * @return int
     */
    public function getAverageGamesPlayed()
    {
        return $this->averageGamesPlayed;
    }

    /**
     * @return int
     */
    public function getLosses()
    {
        return $this->losses;
    }

    /**
     * @return string
     */
    public function getTeamStatType()
    {
        return $this->teamStatType;
    }

    /**
     * @return int
     */
    public function getWins()
    {
        return $this->wins;
    }
}