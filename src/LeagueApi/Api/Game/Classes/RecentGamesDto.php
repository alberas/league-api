<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\Game\Classes;


use JMS\Serializer\Annotation as JMS;

/**
 * Class RecentGamesDto
 */
class RecentGamesDto {

    /**
     * @JMS\Type("array<LeagueApi\Api\Game\Classes\GameDto>")
     * @var GameDto[] $games
     */
    private $games;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("summonerId")
     * @var integer $summmonerId
     */
    private $summonerId;
} 