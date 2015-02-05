<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;

/**
 * Class BlockDto
 */
class BlockDto {
    /**
     * @JMS\Type("array<LeagueApi\Api\LolStaticData\Classes\Champion\BlockItemDto>")
     * @var \LeagueApi\Api\LolStaticData\Classes\Champion\BlockItemDto[] $items
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
} 