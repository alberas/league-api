<?php


namespace LeagueApi\Game\Classes;


use JMS\Serializer\Annotation as JMS;

/**
 * Class RecentGamesDto
 */
class RecentGamesDto
{

    /**
     * @JMS\Type("array<LeagueApi\Game\Classes\GameDto>")
     * @var GameDto[] $games
     */
    private $games;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("summonerId")
     * @var integer $summmonerId
     */
    private $summonerId;

    /**
     * @return GameDto[]
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * @return int
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }
} 