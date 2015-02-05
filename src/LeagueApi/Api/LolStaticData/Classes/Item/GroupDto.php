<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Item;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GroupDto
 */
class GroupDto {

    /**
     * @JMS\Type("string")
     * @var string $MaxGroupOwnable
     */
    private $MaxGroupOwnable;

    /**
     * @JMS\Type("string")
     * @var string $key
     */
    private $key;
} 