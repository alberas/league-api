<?php

namespace LeagueApi\Summoner\Classes\Runes;


use JMS\Serializer\Annotation as JMS;

/**
 * Class RunePagesDto
 */
class RunePagesDto
{
    /**
     * @JMS\Type("array<LeagueApi\Summoner\Classes\Runes\RunePageDto>")
     * Collection of rune pages associated with the summoner.
     * @var RunePageDto[]
     */
    private $pages;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("summonerId")
     * Summoner ID.
     * @var integer
     */
    private $summonerId;

    /**
     * @return RunePageDto[]
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @return int
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }
}
