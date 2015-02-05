<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\Classes;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ImageDto
 */
class ImageDto {
    /**
     * @JMS\Type("string")
     * @var string $full
     */
    private $full;

    /**
     * @JMS\Type("string")
     * @var string $group
     */
    private $group;

    /**
     * @JMS\Type("integer")
     * @var integer $h
     */
    private $h;

    /**
     * @JMS\Type("string")
     * @var string $sprite
     */
    private $sprite;

    /**
     * @JMS\Type("integer")
     * @var integer $w
     */
    private $w;

    /**
     * @JMS\Type("integer")
     * @var integer $x
     */
    private $x;

    /**
     * @JMS\Type("integer")
     * @var integer $y
     */
    private $y;
} 