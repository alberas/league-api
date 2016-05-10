<?php


namespace LeagueApi\CurrentGame\Classes;

use JMS\Serializer\Annotation as JMS;

class CurrentGameParticipant
{
    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("bot")
     * @var boolean $bot
     * Flag indicating whether or not this participant is a bot
     */
    private $bot;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("championId")
     * @var integer $championId
     * The ID of the champion played by this participant
     */
    private $championId;

    /**
     * @JMS\Type("array<LeagueApi\CurrentGame\Classes\Mastery>")
     * @JMS\SerializedName("masteries")
     * @var Mastery[] $masteries
     * The masteries used by this participant
     */
    private $masteries;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("profileIconId")
     * @var integer $profileIconId
     * The ID of the profile icon used by this participant
     */
    private $profileIconId;

    /**
     * @JMS\Type("array<LeagueApi\CurrentGame\Classes\Rune>")
     * @JMS\SerializedName("runes")
     * @var Rune[] $runes
     * The runes used by this participant
     */
    private $runes;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("spell1Id")
     * @var integer $spell1Id
     * The ID of the first summoner spell used by this participant
     */
    private $spell1Id;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("spell2Id")
     * @var integer $spell2Id
     * The ID of the second summoner spell used by this participant
     */
    private $spell2Id;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("summonerId")
     * @var integer $summonerId
     * The summoner ID of this participant
     */
    private $summonerId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("summonerName")
     * @var string $summonerName
     * The summoner name of this participant
     */
    private $summonerName;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("teamId")
     * @var integer $teamId
     * The team ID of this participant, indicating the participant's team
     */
    private $teamId;

    /**
     * @return boolean
     */
    public function isBot()
    {
        return $this->bot;
    }

    /**
     * @return int
     */
    public function getChampionId()
    {
        return $this->championId;
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
    public function getProfileIconId()
    {
        return $this->profileIconId;
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
     * @return int
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }

    /**
     * @return string
     */
    public function getSummonerName()
    {
        return $this->summonerName;
    }

    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->teamId;
    }
}
