<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\Classes;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GoldDto
 */
class GoldDto {

    /**
     * @JMS\Type("integer")
     * @var integer $base
     */
    private $base;

    /**
     * @JMS\Type("boolean")
     * @var boolean $purchasable
     */
    private $purchasable;

    /**
     * @JMS\Type("integer")
     * @var integer $sell
     */
    private $sell;

    /**
     * @JMS\Type("integer")
     * @var integer $total
     */
    private $total;
} 