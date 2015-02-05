<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Map;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Api\Classes\ImageDto;

class MapDto {
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("mapId")
     * @var integer $mapId
     */
    private $mapId;

    /**
     * @JMS\Type("array<integer>")
     * @JMS\SerializedName("unpurchasableItemList")
     * @var array $unpurchasableItemList
     */
    private $unpurchasableItemList;

    /**
     * @JMS\Type("LeagueApi\Api\Classes\ImageDto")
     * @var ImageDto $image
     */
    private $image;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("mapName")
     * @var string $mapName
     */
    private $mapName;
}