<?php
/**
 * @author Simeon Kolev
 */

namespace LeagueApi\Summoner\Classes\Masteries;


use JMS\Serializer\Annotation as JMS;

/**
 * Class MasteryPagesDto
 */
class MasteryPagesDto{
    /**
     * @JMS\Type("array<LeagueApi\Summoner\Classes\Masteries\MasteryPageDto>")
     * Collection of mastery pages associated with the summoner.
     * @var MasteryPageDto[]
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
     * @return MasteryPageDto[]
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