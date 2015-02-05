<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\Classes;

use JMS\Serializer\Annotation as JMS;

/**
 * Class MetaDataDto
 */
class MetaDataDto {

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("isRune")
     * @var boolean $isRune
     */
    private $isRune;

    /**
     * @JMS\Type("string")
     * @var string $tier
     */
    private $tier;

    /**
     * @JMS\Type("string")
     * @var string $type
     */
    private $type;
} 