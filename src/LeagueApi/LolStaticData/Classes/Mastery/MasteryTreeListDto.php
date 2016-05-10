<?php


namespace LeagueApi\LolStaticData\Classes\Mastery;

use JMS\Serializer\Annotation as JMS;

/**
 * Class MasteryTreeListDto
 */
class MasteryTreeListDto
{

    /**
     * @JMS\Type("array<LeagueApi\LolStaticData\Classes\Mastery\MasteryTreeItemDto>")
     * @JMS\SerializedName("masteryTreeItems")
     * @var MasteryTreeItemDto[] $masteryTreeItems
     */
    private $masteryTreeItems;

    /**
     * @return MasteryTreeItemDto[]
     */
    public function getMasteryTreeItems()
    {
        return $this->masteryTreeItems;
    }
}
