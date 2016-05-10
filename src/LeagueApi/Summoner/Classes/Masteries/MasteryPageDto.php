<?php
/**
 * @author Simeon Kolev
 */

namespace LeagueApi\Summoner\Classes\Masteries;


use JMS\Serializer\Annotation as JMS;

/**
 * Class MasteryPageDto
 */
class MasteryPageDto
{
    /**
     * @JMS\Type("boolean")
     * @var boolean $current
     * Indicates if the mastery page is the current mastery page.
     */
    private $current;

    /**
     * @JMS\Type("integer")
     * @var integer $id
     * Mastery page ID.
     */
    private $id;

    /**
     * @JMS\Type("array<LeagueApi\Summoner\Classes\Masteries\MasteryDto>")
     * @var MasteryDto[]
     * Collection of masteries associated with the mastery page. For static information correlating to masteries, please refer to the LoL Static Data API.
     */
    private $masteries;

    /**
     * @JMS\Type("string")
     * @var string $name
     * Mastery page name.
     */
    private $name;

    /**
     * @return boolean
     */
    public function isCurrent()
    {
        return $this->current;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return MasteryDto[]
     */
    public function getMasteries()
    {
        return $this->masteries;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
