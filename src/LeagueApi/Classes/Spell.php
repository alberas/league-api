<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Classes;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Spell
 */
abstract class Spell {
    /**
     * @JMS\Type("array<double>")
     * @var double[] $cooldown
     */
    protected $cooldown;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("cooldownBurn")
     * @var string $cooldownBurn
     */
    protected $cooldownBurn;

    /**
     * @JMS\Type("array<integer>")
     * @var integer[] $cost
     */
    protected $cost;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("costBurn")
     * @var string $costBurn
     */
    protected $costBurn;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("costType")
     * @var string $costType
     */
    protected $costType;

    /**
     * @JMS\Type("string")
     * @var string $description
     */
    protected $description;

    /**
     * @JMS\Type("array<array<double>>")
     * @var array[double[]] $effect
     */
    protected $effect;

    /**
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("effectBurn")
     * @var string[] $effectBurn
     */
    protected $effectBurn;

    /**
     * @JMS\Type("LeagueApi\Classes\ImageDto")
     * @var ImageDto $image
     */
    protected $image;

    /**
     * @JMS\Type("string")
     * @var string $key
     */
    protected $key;

    /**
     * @JMS\Type("LeagueApi\Classes\LevelTipDto")
     * @var LevelTipDto $leveltip
     */
    protected $leveltip;

    /**
     * @JMS\Type("integer")
     * @var integer $maxrank
     */
    protected $maxrank;

    /**
     * @JMS\Type("string")
     * @var string $name
     */
    protected $name;

    /**
     * @JMS\Type("array")
     * @var integer[]|string $range
     */
    protected $range;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("rangeBurn")
     * @var string $rangeBurn
     */
    protected $rangeBurn;

    /**
     * @JMS\Type("string")
     * @var string $resource
     */
    protected $resource;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("sanitizedDescription")
     * @var string $sanitizedDescription
     */
    protected $sanitizedDescription;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("sanitizedTooltip")
     * @var string $sanitizedTooltip
     */
    protected $sanitizedTooltip;

    /**
     * @JMS\Type("string")
     * @var string $tooltip
     */
    protected $tooltip;

    /**
     * @JMS\Type("array<LeagueApi\Classes\SpellVarsDto>")
     * @var SpellVarsDto[] $vars
     */
    protected $vars;

    /**
     * @return \double[]
     */
    public function getCooldown()
    {
        return $this->cooldown;
    }

    /**
     * @return string
     */
    public function getCooldownBurn()
    {
        return $this->cooldownBurn;
    }

    /**
     * @return \integer[]
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @return string
     */
    public function getCostBurn()
    {
        return $this->costBurn;
    }

    /**
     * @return string
     */
    public function getCostType()
    {
        return $this->costType;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return array
     */
    public function getEffect()
    {
        return $this->effect;
    }

    /**
     * @return \string[]
     */
    public function getEffectBurn()
    {
        return $this->effectBurn;
    }

    /**
     * @return ImageDto
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return LevelTipDto
     */
    public function getLeveltip()
    {
        return $this->leveltip;
    }

    /**
     * @return int
     */
    public function getMaxrank()
    {
        return $this->maxrank;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return \integer[]|string
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * @return string
     */
    public function getRangeBurn()
    {
        return $this->rangeBurn;
    }

    /**
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @return string
     */
    public function getSanitizedDescription()
    {
        return $this->sanitizedDescription;
    }

    /**
     * @return string
     */
    public function getSanitizedTooltip()
    {
        return $this->sanitizedTooltip;
    }

    /**
     * @return string
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * @return SpellVarsDto[]
     */
    public function getVars()
    {
        return $this->vars;
    }

} 