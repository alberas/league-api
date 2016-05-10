<?php


namespace LeagueApi\CurrentGame\Classes;

use JMS\Serializer\Annotation as JMS;

class Rune
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("count")
     * @var integer $count
     * The count of this rune used by the participant
     */
    private $count;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("runeId")
     * @var integer $runeId
     * The ID of the rune
     */
    private $runeId;

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return int
     */
    public function getRuneId()
    {
        return $this->runeId;
    }
}