<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Item;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Api\Classes\BasicDataDto;
use LeagueApi\Api\Classes\ListDto;

/**
 * Class ItemListDto
 */
class ItemListDto extends ListDto {

    /**
     * @JMS\Type("LeagueApi\Api\Classes\BasicDataDto")
     * @var BasicDataDto $basic
     */
    private $basic;

    /**
     * @JMS\Type("array<string, LeagueApi\Api\LolStaticData\Classes\Item\ItemDto>")
     * @var ItemDto[] $data
     */
    protected $data;

    /**
     * @JMS\Type("array<LeagueApi\Api\LolStaticData\Classes\Item\GroupDto>")
     * @var GroupDto[] $groups
     */
    private $groups;

    /**
     * @JMS\Type("array<LeagueApi\Api\LolStaticData\Classes\Item\ItemTreeDto>")
     * @var ItemTreeDto[] $tree
     */
    private $tree;
} 