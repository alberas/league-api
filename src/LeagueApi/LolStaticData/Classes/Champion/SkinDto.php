<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\LolStaticData\Classes\Champion;

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

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }
} 