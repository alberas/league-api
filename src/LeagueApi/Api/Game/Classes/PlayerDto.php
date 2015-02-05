<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\Game\Classes;


use JMS\Serializer\Annotation as JMS;

/**
 * Class PlayerDto
 */
class PlayerDto {

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
} 