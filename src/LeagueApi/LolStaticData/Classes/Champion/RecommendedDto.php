<?php


namespace LeagueApi\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;

/**
 * Class RecommendedDto
 */
class RecommendedDto
{
    /**
     * @JMS\Type("array<LeagueApi\LolStaticData\Classes\Champion\BlockDto>")
     * @var BlockDto[] $blocks
     */
    private $blocks;

    /**
     * @JMS\Type("string")
     * @var string $champion
     */
    private $champion;

    /**
     * @JMS\Type("string")
     * @var string $map
     */
    private $map;

    /**
     * @JMS\Type("string")
     * @var string $mode
     */
    private $mode;

    /**
     * @JMS\Type("boolean")
     * @var boolean $priority
     */
    private $priority;

    /**
     * @JMS\Type("string")
     * @var string $title
     */
    private $title;

    /**
     * @JMS\Type("string")
     * @var string $type
     */
    private $type;

    /**
     * @return BlockDto[]
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * @return string
     */
    public function getChampion()
    {
        return $this->champion;
    }

    /**
     * @return string
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @return boolean
     */
    public function isPriority()
    {
        return $this->priority;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
