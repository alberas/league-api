<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class Mastery
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("masteryId")
     * @var integer $masteryId
     * Mastery ID
     */
    private $masteryId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("rank")
     * @var integer $rank
     * Mastery rank
     */
    private $rank;

    /**
     * @return int
     */
    public function getMasteryId()
    {
        return $this->masteryId;
    }

    /**
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }
}