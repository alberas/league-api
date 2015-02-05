<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;

/**
 * Class BlockDto
 */
class BlockDto {
    /**
     * @JMS\Type("array<LeagueApi\LolStaticData\Classes\Champion\BlockItemDto>")
     * @var \LeagueApi\LolStaticData\Classes\Champion\BlockItemDto[] $items
     */
    private $items;

    /**
     * @JMS\Type("boolean")
     * @var boolean $recMath
     */
    private $recMath;

    /**
     * @JMS\Type("string")
     * @var string $type
     */
    private $type;

    /**
     * @return BlockItemDto[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return boolean
     */
    public function isRecMath()
    {
        return $this->recMath;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
} 