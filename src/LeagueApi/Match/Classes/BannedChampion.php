<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class BannedChampion
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("championId")
     * @var integer $championId
     * Banned champion ID
     */
    private $championId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("pickTurn")
     * @var integer $pickTurn
     * Turn during which the champion was banned
     */
    private $pickTurn;

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
}
