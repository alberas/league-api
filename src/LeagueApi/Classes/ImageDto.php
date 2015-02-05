<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Classes;

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

    /**
     * @return string
     */
    public function getFull()
    {
        return $this->full;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @return int
     */
    public function getH()
    {
        return $this->h;
    }

    /**
     * @return string
     */
    public function getSprite()
    {
        return $this->sprite;
    }

    /**
     * @return int
     */
    public function getW()
    {
        return $this->w;
    }

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }
} 