<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;

/**
 * Class RecommendedDto
 */
class RecommendedDto {
    /**
     * @JMS\Type("array<LeagueApi\Api\LolStaticData\Classes\Champion\BlockDto>")
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
} 