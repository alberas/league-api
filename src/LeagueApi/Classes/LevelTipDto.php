<?php


namespace LeagueApi\Classes;

use JMS\Serializer\Annotation as JMS;

/**
 * Class LevelTipDto
 */
class LevelTipDto {
    /**
     * @JMS\Type("array<string>")
     * @var string[] $effect
     */
    private $effect;

    /**
     * @JMS\Type("array<string>")
     * @var string[] $label
     */
    private $label;

    /**
     * @return \string[]
     */
    public function getEffect()
    {
        return $this->effect;
    }

    /**
     * @return \string[]
     */
    public function getLabel()
    {
        return $this->label;
    }
}