<?php


namespace LeagueApi\LolStaticData\Classes\Item;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GroupDto
 */
class GroupDto
{

    /**
     * @JMS\Type("string")
     * @var string $MaxGroupOwnable
     */
    private $MaxGroupOwnable;

    /**
     * @JMS\Type("string")
     * @var string $key
     */
    private $key;

    /**
     * @return string
     */
    public function getMaxGroupOwnable()
    {
        return $this->MaxGroupOwnable;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
}
