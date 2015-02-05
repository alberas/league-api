<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\Classes;

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
     * @JMS\Type("LeagueApi\Api\Classes\ImageDto")
     * @var ImageDto $image
     */
    protected $image;

    /**
     * @JMS\Type("string")
     * @var string $key
     */
    protected $key;

    /**
     * @JMS\Type("LeagueApi\Api\Classes\LevelTipDto")
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
     * @JMS\Type("array<LeagueApi\Api\Classes\SpellVarsDto>")
     * @var SpellVarsDto[] $vars
     */
    protected $vars;
} 