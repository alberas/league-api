<?php


namespace LeagueApi\Classes;

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

    /**
     * @return boolean
     */
    public function isIsRune()
    {
        return $this->isRune;
    }

    /**
     * @return string
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
} 