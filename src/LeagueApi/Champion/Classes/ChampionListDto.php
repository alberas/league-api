<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Champion\Classes;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ChampionListDto
 */
class ChampionListDto {
    /**
     * @JMS\Type("array<LeagueApi\Champion\Classes\ChampionDto>")
     * @var ChampionDto[] $champions
     */
    private $champions;

    /**
     * @return ChampionDto[]
     */
    public function getChampions()
    {
        return $this->champions;
    }
} 