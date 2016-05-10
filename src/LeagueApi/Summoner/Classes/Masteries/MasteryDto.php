<?php
/**
 * @author Simeon Kolev
 */

namespace LeagueApi\Summoner\Classes\Masteries;


use JMS\Serializer\Annotation as JMS;

/**
 * Class MasteryDto
 */
class MasteryDto
{
    /**
     * @JMS\Type("integer")
     * @var integer $id
     * Mastery id.
     */
    private $id;

    /**
     * @JMS\Type("integer")
     * @var integer $rank
     * Mastery rank (i.e., the number of points put into this mastery).
     */
    private $rank;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }
} 