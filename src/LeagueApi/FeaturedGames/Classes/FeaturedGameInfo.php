<?php


namespace LeagueApi\FeaturedGames\Classes;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\GameInfo;

class FeaturedGameInfo extends GameInfo
{
    /**
     * @JMS\Type("array<LeagueApi\FeaturedGames\Classes\Participant>")
     * @JMS\SerializedName("participants")
     * @var Participant[] $participants
     * The participant information
     */
    private $participants;

    /**
     * @return Participant[]
     */
    public function getParticipants()
    {
        return $this->participants;
    }
}