<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\Champion\Classes;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ChampionListDto
 */
class ChampionListDto {
    /**
     * @JMS\Type("array<LeagueApi\Api\Champion\Classes\ChampionDto>")
     * @var ChampionDto[] $champions
     */
    private $champions;
} 