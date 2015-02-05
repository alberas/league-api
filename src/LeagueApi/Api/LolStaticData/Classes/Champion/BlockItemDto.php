<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;

/**
 * Class BlockItemDto
 */
class BlockItemDto {
    /**
     * @JMS\Type("integer")
     * @var integer $count
     */
    private $count;

    /**
     * @JMS\Type("integer")
     * @var integer $id
     */
    private $id;
} 