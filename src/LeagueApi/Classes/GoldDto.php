<?php


namespace LeagueApi\Classes;

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

    /**
     * @return int
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @return boolean
     */
    public function isPurchasable()
    {
        return $this->purchasable;
    }

    /**
     * @return int
     */
    public function getSell()
    {
        return $this->sell;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }
}
