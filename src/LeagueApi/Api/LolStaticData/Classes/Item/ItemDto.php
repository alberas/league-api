<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Item;

use JMS\Serializer\Annotation as JMS;

use LeagueApi\Api\Classes\BasicDataDto;

class ItemDto extends BasicDataDto {
    /**
     * @JMS\Type("array<string, string>")
     * @var array $effect
     */
    private $effect;
} 