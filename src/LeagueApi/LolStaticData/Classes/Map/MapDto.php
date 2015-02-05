<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\LolStaticData\Classes\Map;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\ImageDto;

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
     * @JMS\Type("LeagueApi\Classes\ImageDto")
     * @var ImageDto $image
     */
    private $image;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("mapName")
     * @var string $mapName
     */
    private $mapName;

    /**
     * @return int
     */
    public function getMapId()
    {
        return $this->mapId;
    }

    /**
     * @return array
     */
    public function getUnpurchasableItemList()
    {
        return $this->unpurchasableItemList;
    }

    /**
     * @return ImageDto
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getMapName()
    {
        return $this->mapName;
    }
}