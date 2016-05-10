<?php


namespace LeagueApi\LolStaticData\Classes\Item;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\BasicDataDto;
use LeagueApi\Classes\ListDto;

/**
 * @method ItemDto[] getData()
 */
class ItemListDto extends ListDto
{

    /**
     * @JMS\Type("LeagueApi\Classes\BasicDataDto")
     * @var BasicDataDto $basic
     */
    private $basic;

    /**
     * @JMS\Type("array<string, LeagueApi\LolStaticData\Classes\Item\ItemDto>")
     * @var ItemDto[] $data
     */
    protected $data;

    /**
     * @JMS\Type("array<LeagueApi\LolStaticData\Classes\Item\GroupDto>")
     * @var GroupDto[] $groups
     */
    private $groups;

    /**
     * @JMS\Type("array<LeagueApi\LolStaticData\Classes\Item\ItemTreeDto>")
     * @var ItemTreeDto[] $tree
     */
    private $tree;

    /**
     * @return BasicDataDto
     */
    public function getBasic()
    {
        return $this->basic;
    }

    /**
     * @return GroupDto[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @return ItemTreeDto[]
     */
    public function getTree()
    {
        return $this->tree;
    }
}
