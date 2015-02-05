<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Mastery;

use JMS\Serializer\Annotation as JMS;

/**
 * Class MasteryTreeListDto
 */
class MasteryTreeListDto {

    /**
     * @JMS\Type("array<LeagueApi\Api\LolStaticData\Classes\Mastery\MasteryTreeItemDto>")
     * @JMS\SerializedName("masteryTreeItems")
     * @var MasteryTreeItemDto[] $masteryTreeItems
     */
    private $masteryTreeItems;
}