<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class ParticipantIdentity
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("participantId")
     * @var integer $participantId
     * Participant ID
     */
    private $participantId;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\Player")
     * @JMS\SerializedName("player")
     * @var Player $player
     * Player information
     */
    private $player;

    /**
     * @return int
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }

    /**
     * @return Player
     */
    public function getPlayer()
    {
        return $this->player;
    }
}
