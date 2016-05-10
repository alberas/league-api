<?php


namespace LeagueApi\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;

/**
 * Class BlockItemDto
 */
class BlockItemDto
{
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

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
} 