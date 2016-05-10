<?php


namespace LeagueApi\Classes;

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
     * @JMS\Type("LeagueApi\Classes\GoldDto")
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
     * @JMS\Type("LeagueApi\Classes\ImageDto")
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
     * @JMS\Type("LeagueApi\Classes\MetaDataDto")
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
     * @JMS\Type("LeagueApi\Classes\BasicDataStatsDto")
     * @var BasicDataStatsDto $stats
     */
    protected $stats;

    /**
     * @JMS\Type("array<string>")
     * @var string[] $tags
     */
    protected $tags;

    /**
     * @return string
     */
    public function getColloq()
    {
        return $this->colloq;
    }

    /**
     * @return boolean
     */
    public function isConsumeOnFull()
    {
        return $this->consumeOnFull;
    }

    /**
     * @return boolean
     */
    public function isConsumed()
    {
        return $this->consumed;
    }

    /**
     * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return \string[]
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return GoldDto
     */
    public function getGold()
    {
        return $this->gold;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @return boolean
     */
    public function isHideFromAll()
    {
        return $this->hideFromAll;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return ImageDto
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return boolean
     */
    public function isInStore()
    {
        return $this->inStore;
    }

    /**
     * @return \string[]
     */
    public function getInto()
    {
        return $this->into;
    }

    /**
     * @return \boolean[]
     */
    public function getMaps()
    {
        return $this->maps;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPlaintext()
    {
        return $this->plaintext;
    }

    /**
     * @return string
     */
    public function getRequiredChampion()
    {
        return $this->requiredChampion;
    }

    /**
     * @return MetaDataDto
     */
    public function getRune()
    {
        return $this->rune;
    }

    /**
     * @return string
     */
    public function getSanitizedDescription()
    {
        return $this->sanitizedDescription;
    }

    /**
     * @return int
     */
    public function getSpecialRecipe()
    {
        return $this->specialRecipe;
    }

    /**
     * @return int
     */
    public function getStacks()
    {
        return $this->stacks;
    }

    /**
     * @return BasicDataStatsDto
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @return \string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

}
