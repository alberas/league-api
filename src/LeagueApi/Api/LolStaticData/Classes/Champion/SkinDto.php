<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SkinDto
 */
class SkinDto {
    /**
     * @JMS\Type("integer")
     * @var integer $id
     */
    private $id;

    /**
     * @JMS\Type("string")
     * @var string $name
     */
    private $name;

    /**
     * @JMS\Type("integer")
     * @var integer $num
     */
    private $num;
} 