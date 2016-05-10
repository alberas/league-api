<?php


namespace LeagueApi\League\Classes;

use JMS\Serializer\Annotation as JMS;

class LeagueEntryDto
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("division")
     * @var string $division
     * The league division of the participant.
     */
    private $division;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("isFreshBlood")
     * @var boolean $isFreshBlood
     * Specifies if the participant is fresh blood.
     */
    private $isFreshBlood;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("isHotStreak")
     * @var boolean $isHotStreak
     * Specifies if the participant is on a hot streak.
     */
    private $isHotStreak;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("isInactive")
     * @var boolean $isInactive
     * Specifies if the participant is inactive.
     */
    private $isInactive;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("isVeteran")
     * @var boolean $isVeteran
     * Specifies if the participant is a veteran.
     */
    private $isVeteran;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("leaguePoints")
     * @var integer $leaguePoints
     * The league points of the participant.
     */
    private $leaguePoints;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("losses")
     * @var integer $losses
     * The number of losses for the participant.
     */
    private $losses;

    /**
     * @JMS\Type("LeagueApi\League\Classes\MiniSeriesDto")
     * @JMS\SerializedName("miniSeries")
     * @var MiniSeriesDto $miniSeries
     * Mini series data for the participant. Only present if the participant is currently in a mini series.
     */
    private $miniSeries;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("playerOrTeamId")
     * @var string $playerOrTeamId
     * The ID of the participant (i.e., summoner or team) represented by this entry.
     */
    private $playerOrTeamId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("playerOrTeamName")
     * @var string $playerOrTeamName
     * The name of the the participant (i.e., summoner or team) represented by this entry.
     */
    private $playerOrTeamName;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("wins")
     * @var integer $wins
     * The number of wins for the participant.
     */
    private $wins;

    /**
     * @return string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * @return boolean
     */
    public function isIsFreshBlood()
    {
        return $this->isFreshBlood;
    }

    /**
     * @return boolean
     */
    public function isIsHotStreak()
    {
        return $this->isHotStreak;
    }

    /**
     * @return boolean
     */
    public function isIsInactive()
    {
        return $this->isInactive;
    }

    /**
     * @return boolean
     */
    public function isIsVeteran()
    {
        return $this->isVeteran;
    }

    /**
     * @return int
     */
    public function getLeaguePoints()
    {
        return $this->leaguePoints;
    }

    /**
     * @return int
     */
    public function getLosses()
    {
        return $this->losses;
    }

    /**
     * @return MiniSeriesDto
     */
    public function getMiniSeries()
    {
        return $this->miniSeries;
    }

    /**
     * @return string
     */
    public function getPlayerOrTeamId()
    {
        return $this->playerOrTeamId;
    }

    /**
     * @return string
     */
    public function getPlayerOrTeamName()
    {
        return $this->playerOrTeamName;
    }

    /**
     * @return int
     */
    public function getWins()
    {
        return $this->wins;
    }
}