<?php
/**
 * @author Simeon Kolev
 */

namespace LeagueApi\Summoner\Classes\Runes;


use JMS\Serializer\Annotation as JMS;

/**
 * Class RunePageDto
 */
class RunePageDto
{
    /**
     * @JMS\Type("boolean")
     * @var boolean $current
     * Indicates if the page is the current page.
     */
    private $current;

    /**
     * @JMS\Type("integer")
     * @var integer $id
     * Rune page ID.
     */
    private $id;

    /**
     * @JMS\Type("array<LeagueApi\Summoner\Classes\Runes\RuneSlotDto>")
     * @var RuneSlotDto[]
     * Collection of rune slots associated with the rune page.
     */
    private $slots;

    /**
     * @JMS\Type("string")
     * @var string $name
     * Rune page name.
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
     * @return RuneSlotDto[]
     */
    public function getSlots()
    {
        return $this->slots;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
