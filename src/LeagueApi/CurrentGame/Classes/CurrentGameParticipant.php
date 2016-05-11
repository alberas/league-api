<?php


namespace LeagueApi\CurrentGame\Classes;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\Participant;

class CurrentGameParticipant extends Participant
{
    /**
     * @JMS\Type("array<LeagueApi\CurrentGame\Classes\Mastery>")
     * @JMS\SerializedName("masteries")
     * @var Mastery[] $masteries
     * The masteries used by this participant
     */
    private $masteries;

    /**
     * @JMS\Type("array<LeagueApi\CurrentGame\Classes\Rune>")
     * @JMS\SerializedName("runes")
     * @var Rune[] $runes
     * The runes used by this participant
     */
    private $runes;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("summonerId")
     * @var integer $summonerId
     * The summoner ID of this participant
     */
    private $summonerId;

    /**
     * @return Mastery[]
     */
    public function getMasteries()
    {
        return $this->masteries;
    }

    /**
     * @return Rune[]
     */
    public function getRunes()
    {
        return $this->runes;
    }

    /**
     * @return int
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }
}
