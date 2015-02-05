<?php
/**
 * @author Simeon Kolev
 */

namespace LeagueApi\Summoner\Classes\Runes;


use JMS\Serializer\Annotation as JMS;

/**
 * Class RuneSlotDto
 */
class RuneSlotDto {
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("runeId")
     * @var integer $id
     * Mastery id.
     */
    private $runeId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("runeSlotId")
     * @var integer $rank
     * Mastery rank (i.e., the number of points put into this mastery).
     */
    private $runeSlotId;

    /**
     * @return int
     */
    public function getRuneId()
    {
        return $this->runeId;
    }

    /**
     * @return int
     */
    public function getRuneSlotId()
    {
        return $this->runeSlotId;
    }
} 