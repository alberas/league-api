<?php


namespace LeagueApi\LolStaticData\Classes\Mastery;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\ImageDto;

/**
 * Class MasteryDto
 */
class MasteryDto {

    /**
     * @JMS\Type("array<string>")
     * @var string[] $description
     */
    private $description;

    /**
     * @JMS\Type("integer")
     * @var integer $id
     */
    private $id;

    /**
     * @JMS\Type("LeagueApi\Classes\ImageDto")
     * @var ImageDto $image
     */
    private $image;

    /**
     * @JMS\Type("string")
     * @var string $name
     */
    private $name;

    /**
     * @JMS\Type("string")
     * @var string $prereq
     */
    private $prereq;

    /**
     * @JMS\Type("integer")
     * @var integer $ranks
     */
    private $ranks;

    /**
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("sanitizedDescription")
     * @var string[] $sanitizedDescription
     */
    private $sanitizedDescription;

    /**
     * @return \string[]
     */
    public function getDescription()
    {
        return $this->description;
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPrereq()
    {
        return $this->prereq;
    }

    /**
     * @return int
     */
    public function getRanks()
    {
        return $this->ranks;
    }

    /**
     * @return \string[]
     */
    public function getSanitizedDescription()
    {
        return $this->sanitizedDescription;
    }
} 