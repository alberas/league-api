<?php
/**
 * @author Simeon Kolev
 */

namespace LeagueApi\Api\Summoner\Classes\Masteries;


use JMS\Serializer\Annotation as JMS;

/**
 * Class MasteryDto
 */
class MasteryDto {
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
} 