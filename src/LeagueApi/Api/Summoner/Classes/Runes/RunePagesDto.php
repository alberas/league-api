<?php
/**
 * @author Simeon Kolev
 */

namespace LeagueApi\Api\Summoner\Classes\Runes;


use JMS\Serializer\Annotation as JMS;

/**
 * Class RunePagesDto
 */
class RunePagesDto{
    /**
     * @JMS\Type("array<LeagueApi\Api\Summoner\Classes\Runes\RunePageDto>")
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
}