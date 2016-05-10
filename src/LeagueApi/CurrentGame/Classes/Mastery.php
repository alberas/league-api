<?php


namespace LeagueApi\CurrentGame\Classes;

use JMS\Serializer\Annotation as JMS;

class Mastery
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("masteryId")
     * @var integer $masteryId
     * The ID of the mastery
     */
    private $masteryId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("rank")
     * @var integer $rank
     * The number of points put into this mastery by the user
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
