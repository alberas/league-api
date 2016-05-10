<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class Rune
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("rank")
     * @var integer $rank
     * Rune rank
     */
    private $rank;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("runeId")
     * @var integer $runeId
     * Rune ID
     */
    private $runeId;

    /**
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @return int
     */
    public function getRuneId()
    {
        return $this->runeId;
    }
}
