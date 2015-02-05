<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\Classes;

use JMS\Serializer\Annotation as JMS;

/**
 * Class BasicDataDto
 */
class BasicDataDto {

    /**
     * @JMS\Type("string")
     * @var string $colloq
     */
    protected $colloq;

    /**
     * @JMS\Type("boolean")
     * @var boolean $consumeOnFull
     */
    protected $consumeOnFull;

    /**
     * @JMS\Type("boolean")
     * @var boolean $consumed
     */
    protected $consumed;

    /**
     * @JMS\Type("integer")
     * @var integer $depth
     */
    protected $depth;

    /**
     * @JMS\Type("string")
     * @var string $description
     */
    protected $description;

    /**
     * @JMS\Type("array<string>")
     * @var string[] $from
     */
    protected $from;

    /**
     * @JMS\Type("LeagueApi\Api\Classes\GoldDto")
     * @var GoldDto $gold
     */
    protected $gold;

    /**
     * @JMS\Type("string")
     * @var string $group
     */
    protected $group;

    /**
     * @JMS\Type("boolean")
     * @var boolean $hideFromAll
     */
    protected $hideFromAll;

    /**
     * @JMS\Type("integer")
     * @var integer $id
     */
    protected $id;

    /**
     * @JMS\Type("LeagueApi\Api\Classes\ImageDto")
     * @var ImageDto $image
     */
    protected $image;

    /**
     * @JMS\Type("boolean")
     * @var boolean $inStore
     */
    protected $inStore;

    /**
     * @JMS\Type("array<string>")
     * @var string[] $into
     */
    protected $into;

    /**
     * @JMS\Type("array<boolean>")
     * @var boolean[] $maps
     */
    protected $maps;

    /**
     * @JMS\Type("string")
     * @var string $name
     */
    protected $name;

    /**
     * @JMS\Type("string")
     * @var string $plaintext
     */
    protected $plaintext;

    /**
     * @JMS\Type("string")
     * @var string $requiredChampion
     */
    protected $requiredChampion;

    /**
     * @JMS\Type("LeagueApi\Api\Classes\MetaDataDto")
     * @var MetaDataDto $rune
     */
    protected $rune;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("sanitizedDescription")
     * @var string $sanitizedDescription
     */
    protected $sanitizedDescription;

    /**
     * @JMS\Type("integer")
     * @var integer $specialRecipe
     */
    protected $specialRecipe;

    /**
     * @JMS\Type("integer")
     * @var integer $stacks
     */
    protected $stacks;

    /**
     * @JMS\Type("LeagueApi\Api\Classes\BasicDataStatsDto")
     * @var BasicDataStatsDto $stats
     */
    protected $stats;

    /**
     * @JMS\Type("array<string>")
     * @var string[] $tags
     */
    protected $tags;
}