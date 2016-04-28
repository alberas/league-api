<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class Participant
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("championId")
     * @var integer $championId
     * Champion ID
     */
    private $championId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("highestAchievedSeasonTier")
     * @var string $highestAchievedSeasonTier
     * Highest ranked tier achieved for the previous season, if any, otherwise null. Used to display border in game loading screen. (Legal values: CHALLENGER, MASTER, DIAMOND, PLATINUM, GOLD, SILVER, BRONZE, UNRANKED)
     */
    private $highestAchievedSeasonTier;

    /**
     * @JMS\Type("array<LeagueApi\Match\Classes\Mastery>")
     * @JMS\SerializedName("masteries")
     * @var Mastery[] $masteries
     * List of mastery information
     */
    private $masteries;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("participantId")
     * @var integer $participantId
     * Participant ID
     */
    private $participantId;

    /**
     * @JMS\Type("array<LeagueApi\Match\Classes\Rune>")
     * @JMS\SerializedName("runes")
     * @var Rune[] $runes
     * List of rune information
     */
    private $runes;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("spell1Id")
     * @var integer $spell1Id
     * First summoner spell ID
     */
    private $spell1Id;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("spell2Id")
     * @var integer $spell2Id
     * Second summoner spell ID
     */
    private $spell2Id;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantStats")
     * @JMS\SerializedName("stats")
     * @var ParticipantStats $stats
     * Participant statistics
     */
    private $stats;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("teamId")
     * @var integer $teamId
     * Team ID
     */
    private $teamId;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimeline")
     * @JMS\SerializedName("timeline")
     * @var ParticipantTimeline $timeline
     * Timeline data. Delta fields refer to values for the specified period (e.g., the gold per minute over the first 10 minutes of the game versus the second 20 minutes of the game. Diffs fields refer to the deltas versus the calculated lane opponent(s).
     */
    private $timeline;

    /**
     * @return int
     */
    public function getChampionId()
    {
        return $this->championId;
    }

    /**
     * @return string
     */
    public function getHighestAchievedSeasonTier()
    {
        return $this->highestAchievedSeasonTier;
    }

    /**
     * @return Mastery[]
     */
    public function getMasteries()
    {
        return $this->masteries;
    }

    /**
     * @return int
     */
    public function getParticipantId()
    {
        return $this->participantId;
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
    public function getSpell1Id()
    {
        return $this->spell1Id;
    }

    /**
     * @return int
     */
    public function getSpell2Id()
    {
        return $this->spell2Id;
    }

    /**
     * @return ParticipantStats
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * @return ParticipantTimeline
     */
    public function getTimeline()
    {
        return $this->timeline;
    }
}