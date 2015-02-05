<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Api\Classes\ImageDto;

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
     * @JMS\SerializedName("sanitizedDescription")
     * @var string $sanitizedDescription
     */
    private $sanitizedDescription;
} 