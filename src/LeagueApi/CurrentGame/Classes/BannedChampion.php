<?php


namespace LeagueApi\CurrentGame\Classes;

use JMS\Serializer\Annotation as JMS;

class BannedChampion
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("championId")
     * @var integer $championId
     * The ID of the banned champion
     */
    private $championId;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("pickTurn")
     * @var integer $pickTurn
     * The turn during which the champion was banned
     */
    private $pickTurn;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("teamId")
     * @var integer $teamId
     * The ID of the team that banned the champion
     */
    private $teamId;

    /**
     * @return int
     */
    public function getChampionId()
    {
        return $this->championId;
    }

    /**
     * @return int
     */
    public function getPickTurn()
    {
        return $this->pickTurn;
    }

    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->teamId;
    }
}