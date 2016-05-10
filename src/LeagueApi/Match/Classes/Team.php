<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class Team
{
    /**
     * @JMS\Type("array<LeagueApi\Match\Classes\BannedChampion>")
     * @JMS\SerializedName("bans")
     * @var BannedChampion[] $bans
     * If game was draft mode, contains banned champion data, otherwise null
     */
    private $bans;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("baronKills")
     * @var integer $baronKills
     * Number of times the team killed baron
     */
    private $baronKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("dominionVictoryScore")
     * @var integer $dominionVictoryScore
     * If game was a dominion game, specifies the points the team had at game end, otherwise null
     */
    private $dominionVictoryScore;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("dragonKills")
     * @var integer $dragonKills
     * Number of times the team killed dragon
     */
    private $dragonKills;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("firstBaron")
     * @var boolean $firstBaron
     * Flag indicating whether or not the team got the first baron kill
     */
    private $firstBaron;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("firstBlood")
     * @var boolean $firstBlood
     * Flag indicating whether or not the team got first blood
     */
    private $firstBlood;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("firstDragon")
     * @var boolean $firstDragon
     * Flag indicating whether or not the team got the first dragon kill
     */
    private $firstDragon;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("firstInhibitor")
     * @var boolean $firstInhibitor
     * Flag indicating whether or not the team destroyed the first inhibitor
     */
    private $firstInhibitor;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("firstRiftHerald")
     * @var boolean $firstRiftHerald
     * Flag indicating whether or not the team got the first rift herald kill
     */
    private $firstRiftHerald;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("firstTower")
     * @var boolean $firstTower
     * Flag indicating whether or not the team destroyed the first tower
     */
    private $firstTower;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("inhibitorKills")
     * @var integer $inhibitorKills
     * Number of inhibitors the team destroyed
     */
    private $inhibitorKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("riftHeraldKills")
     * @var integer $riftHeraldKills
     * Number of times the team killed rift herald
     */
    private $riftHeraldKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("teamId")
     * @var integer $teamId
     * Team ID
     */
    private $teamId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("towerKills")
     * @var integer $towerKills
     * Number of towers the team destroyed
     */
    private $towerKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("vilemawKills")
     * @var integer $vilemawKills
     * Number of times the team killed vilemaw
     */
    private $vilemawKills;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("winner")
     * @var boolean $winner
     * Flag indicating whether or not the team won
     */
    private $winner;

    /**
     * @return BannedChampion[]
     */
    public function getBans()
    {
        return $this->bans;
    }

    /**
     * @return int
     */
    public function getBaronKills()
    {
        return $this->baronKills;
    }

    /**
     * @return int
     */
    public function getDominionVictoryScore()
    {
        return $this->dominionVictoryScore;
    }

    /**
     * @return int
     */
    public function getDragonKills()
    {
        return $this->dragonKills;
    }

    /**
     * @return boolean
     */
    public function isFirstBaron()
    {
        return $this->firstBaron;
    }

    /**
     * @return boolean
     */
    public function isFirstBlood()
    {
        return $this->firstBlood;
    }

    /**
     * @return boolean
     */
    public function isFirstDragon()
    {
        return $this->firstDragon;
    }

    /**
     * @return boolean
     */
    public function isFirstInhibitor()
    {
        return $this->firstInhibitor;
    }

    /**
     * @return boolean
     */
    public function isFirstRiftHerald()
    {
        return $this->firstRiftHerald;
    }

    /**
     * @return boolean
     */
    public function isFirstTower()
    {
        return $this->firstTower;
    }

    /**
     * @return int
     */
    public function getInhibitorKills()
    {
        return $this->inhibitorKills;
    }

    /**
     * @return int
     */
    public function getRiftHeraldKills()
    {
        return $this->riftHeraldKills;
    }

    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * @return int
     */
    public function getTowerKills()
    {
        return $this->towerKills;
    }

    /**
     * @return int
     */
    public function getVilemawKills()
    {
        return $this->vilemawKills;
    }

    /**
     * @return boolean
     */
    public function isWinner()
    {
        return $this->winner;
    }
}
