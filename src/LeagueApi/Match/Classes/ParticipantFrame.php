<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class ParticipantFrame
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("currentGold")
     * @var integer $currentGold
     * Participant's current gold
     */
    private $currentGold;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("dominionScore")
     * @var integer $dominionScore
     * Dominion score of the participant
     */
    private $dominionScore;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("jungleMinionsKilled")
     * @var integer $jungleMinionsKilled
     * Number of jungle minions killed by participant
     */
    private $jungleMinionsKilled;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("level")
     * @var integer $level
     * Participant's current level
     */
    private $level;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("minionsKilled")
     * @var integer $minionsKilled
     * Number of minions killed by participant
     */
    private $minionsKilled;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("participantId")
     * @var integer $participantId
     * Participant ID
     */
    private $participantId;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\Position")
     * @JMS\SerializedName("position")
     * @var Position $position
     * Participant's position
     */
    private $position;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("teamScore")
     * @var integer $teamScore
     * Team score of the participant
     */
    private $teamScore;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalGold")
     * @var integer $totalGold
     * Participant's total gold
     */
    private $totalGold;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("xp")
     * @var integer $xp
     * Experience earned by participant
     */
    private $xp;

    /**
     * @return int
     */
    public function getCurrentGold()
    {
        return $this->currentGold;
    }

    /**
     * @return int
     */
    public function getDominionScore()
    {
        return $this->dominionScore;
    }

    /**
     * @return int
     */
    public function getJungleMinionsKilled()
    {
        return $this->jungleMinionsKilled;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @return int
     */
    public function getMinionsKilled()
    {
        return $this->minionsKilled;
    }

    /**
     * @return int
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }

    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return int
     */
    public function getTeamScore()
    {
        return $this->teamScore;
    }

    /**
     * @return int
     */
    public function getTotalGold()
    {
        return $this->totalGold;
    }

    /**
     * @return int
     */
    public function getXp()
    {
        return $this->xp;
    }
}
