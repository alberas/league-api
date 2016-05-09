<?php


namespace LeagueApi\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\ImageDto;

/**
 * Class PassiveDto
 */
class PassiveDto {
    /**
     * @JMS\Type("string")
     * @var string $description
     */
    private $description;

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
     * @JMS\SerializedName("sanitizedDescription")
     * @var string $sanitizedDescription
     */
    private $sanitizedDescription;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
    public function getSanitizedDescription()
    {
        return $this->sanitizedDescription;
    }
} 