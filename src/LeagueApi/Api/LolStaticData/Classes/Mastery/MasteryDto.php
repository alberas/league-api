<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Mastery;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Api\Classes\ImageDto;

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
     * @JMS\Type("LeagueApi\Api\Classes\ImageDto")
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
} 