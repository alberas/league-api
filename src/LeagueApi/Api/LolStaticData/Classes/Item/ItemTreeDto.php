<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Item;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ItemTreeDto
 * @package Api\LolStaticData\Item
 */
class ItemTreeDto {

    /**
     * @JMS\Type("string")
     * @var string $header
     */
    private $header;

    /**
     * @JMS\Type("array<string>")
     * @var string[] $tags
     */
    private $tags;
} 