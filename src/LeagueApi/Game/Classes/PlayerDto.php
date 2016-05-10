<?php


namespace LeagueApi\Game\Classes;


use JMS\Serializer\Annotation as JMS;

/**
 * Class PlayerDto
 */
class PlayerDto
{

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("championId")
     * @var integer $championId
     */
    private $championId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("summonerId")
     * @var integer $summonerId
     */
    private $summonerId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("teamId")
     * @var integer $teamId
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
    public function getSummonerId()
    {
        return $this->summonerId;
    }

    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->teamId;
    }
}
