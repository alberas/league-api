<?php


namespace LeagueApi\FeaturedGames\Classes;

use JMS\Serializer\Annotation as JMS;

class Participant
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
     * @JMS\Type("integer")
     * @JMS\SerializedName("profileIconId")
     * @var integer $profileIconId
     * The ID of the profile icon used by this participant
     */
    private $profileIconId;

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
     * @return mixed
     */
    public function getChampionId()
    {
        return $this->championId;
    }

    /**
     * @return mixed
     */
    public function getProfileIconId()
    {
        return $this->profileIconId;
    }

    /**
     * @return mixed
     */
    public function getSpell1Id()
    {
        return $this->spell1Id;
    }

    /**
     * @return mixed
     */
    public function getSpell2Id()
    {
        return $this->spell2Id;
    }

    /**
     * @return mixed
     */
    public function getSummonerName()
    {
        return $this->summonerName;
    }

    /**
     * @return mixed
     */
    public function getTeamId()
    {
        return $this->teamId;
    }
}
