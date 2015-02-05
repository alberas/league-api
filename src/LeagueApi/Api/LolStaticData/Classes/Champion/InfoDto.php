<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;

/**
 * Class InfoDto
 */
class InfoDto {
    /**
     * @JMS\Type("integer")
     * @var integer $attack
     */
    private $attack;

    /**
     * @JMS\Type("integer")
     * @var integer $defense
     */
    private $defense;

    /**
     * @JMS\Type("integer")
     * @var integer $difficulty
     */
    private $difficulty;

    /**
     * @JMS\Type("integer")
     * @var integer $magic
     */
    private $magic;
} 