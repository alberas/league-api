<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Mastery;

use JMS\Serializer\Annotation as JMS;

/**
 * Class MasteryTreeDto
 */
class MasteryTreeDto {

    /**
     * @JMS\Type("array<LeagueApi\Api\LolStaticData\Classes\Mastery\MasteryTreeListDto>")
     * @JMS\SerializedName("Defense")
     * @var MasteryTreeListDto[] $defense
     */
    private $Defense;

    /**
     * @JMS\Type("array<LeagueApi\Api\LolStaticData\Classes\Mastery\MasteryTreeListDto>")
     * @JMS\SerializedName("Offense")
     * @var MasteryTreeListDto[] $Offense
     */
    private $Offense;

    /**
     * @JMS\Type("array<LeagueApi\Api\LolStaticData\Classes\Mastery\MasteryTreeListDto>")
     * @JMS\SerializedName("Utility")
     * @var MasteryTreeListDto[] $Utility
     */
    private $Utility;
} 