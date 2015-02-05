<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Mastery;

use JMS\Serializer\Annotation as JMS;

/**
 * Class MasteryTreeItemDto
 */
class MasteryTreeItemDto {

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("masteryId")
     * @var integer $masteryId
     */
    private $masteryId;

    /**
     * @JMS\Type("string")
     * @var string $prereq
     */
    private $prereq;
} 