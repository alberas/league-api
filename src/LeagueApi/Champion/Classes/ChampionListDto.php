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

    public function getActiveChampions()
    {
        return array_filter($this->champions, function(ChampionDto $championDto) {
            return $championDto->isActive();
        });
    }

    public function getInactiveChampions()
    {
        return array_filter($this->champions, function(ChampionDto $championDto) {
            return !$championDto->isActive();
        });
    }

    public function getRankedPlayEnabledChampions()
    {
        return array_filter($this->champions, function(ChampionDto $championDto) {
            return $championDto->isRankedPlayEnabled();
        });
    }

    public function getRankedPlayDisabledChampions()
    {
        return array_filter($this->champions, function(ChampionDto $championDto) {
            return !$championDto->isRankedPlayEnabled();
        });
    }

    public function getFreeToPlayChampions()
    {
        return array_filter($this->champions, function(ChampionDto $championDto) {
            return $championDto->isFreeToPlay();
        });
    }

    public function getPaidToPlayChampions()
    {
        return array_filter($this->champions, function(ChampionDto $championDto) {
            return !$championDto->isFreeToPlay();
        });
    }
} 