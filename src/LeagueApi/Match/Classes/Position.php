<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class Position
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("x")
     * @var integer $x
     */
    private $x;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("y")
     * @var integer $y
     */
    private $y;

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
