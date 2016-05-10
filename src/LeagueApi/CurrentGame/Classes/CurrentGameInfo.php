<?php


namespace LeagueApi\CurrentGame\Classes;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\GameInfo;

class CurrentGameInfo extends GameInfo
{
    /**
     * @JMS\Type("array<LeagueApi\CurrentGame\Classes\CurrentGameParticipant>")
     * @JMS\SerializedName("participants")
     * @var CurrentGameParticipant[] $participants
     * The participant information
     */
    private $participants;

    /**
     * @return CurrentGameParticipant[]
     */
    public function getParticipants()
    {
        return $this->participants;
    }
}