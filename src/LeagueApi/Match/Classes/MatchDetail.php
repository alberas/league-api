<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class MatchDetail
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("mapId")
     * @var integer $mapId
     * Match map ID
     */
    private $mapId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("matchCreation")
     * @var integer $matchCreation
     * Match creation time. Designates when the team select lobby is created and/or the match is made through match making, not when the game actually starts.
     */
    private $matchCreation;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("matchDuration")
     * @var integer $matchDuration
     * Match duration
     */
    private $matchDuration;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("matchId")
     * @var integer $matchId
     * ID of the match
     */
    private $matchId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("matchMode")
     * @var string $matchMode
     * Match mode (Legal values: CLASSIC, ODIN, ARAM, TUTORIAL, ONEFORALL, ASCENSION, FIRSTBLOOD, KINGPORO)
     */
    private $matchMode;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("matchType")
     * @var string $matchType
     * Match type (Legal values: CUSTOM_GAME, MATCHED_GAME, TUTORIAL_GAME)
     */
    private $matchType;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("matchVersion")
     * @var string $matchVersion
     * Match version
     */
    private $matchVersion;

    /**
     * @JMS\Type("array<LeagueApi\Match\Classes\ParticipantIdentity>")
     * @JMS\SerializedName("participantIdentities")
     * @var ParticipantIdentity[] $participantIdentities
     * Participant identity information
     */
    private $participantIdentities;

    /**
     * @JMS\Type("array<LeagueApi\Match\Classes\Participant>")
     * @JMS\SerializedName("participants")
     * @var Participant[] $participants
     * Participant information
     */
    private $participants;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("platformId")
     * @var string $platformId
     * Platform ID of the match
     */
    private $platformId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("queueType")
     * @var string $queueType
     * Match queue type (Legal values: CUSTOM, NORMAL_5x5_BLIND, RANKED_SOLO_5x5, RANKED_PREMADE_5x5, BOT_5x5, NORMAL_3x3, RANKED_PREMADE_3x3, NORMAL_5x5_DRAFT, ODIN_5x5_BLIND, ODIN_5x5_DRAFT, BOT_ODIN_5x5, BOT_5x5_INTRO, BOT_5x5_BEGINNER, BOT_5x5_INTERMEDIATE, RANKED_TEAM_3x3, RANKED_TEAM_5x5, BOT_TT_3x3, GROUP_FINDER_5x5, ARAM_5x5, ONEFORALL_5x5, FIRSTBLOOD_1x1, FIRSTBLOOD_2x2, SR_6x6, URF_5x5, ONEFORALL_MIRRORMODE_5x5, BOT_URF_5x5, NIGHTMARE_BOT_5x5_RANK1, NIGHTMARE_BOT_5x5_RANK2, NIGHTMARE_BOT_5x5_RANK5, ASCENSION_5x5, HEXAKILL, BILGEWATER_ARAM_5x5, KING_PORO_5x5, COUNTER_PICK, BILGEWATER_5x5, TEAM_BUILDER_DRAFT_UNRANKED_5x5, TEAM_BUILDER_DRAFT_RANKED_5x5)
     */
    private $queueType;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("region")
     * @var string $region
     * Region where the match was played
     */
    private $region;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("season")
     * @var string $season
     * Season match was played (Legal values: PRESEASON3, SEASON3, PRESEASON2014, SEASON2014, PRESEASON2015, SEASON2015, PRESEASON2016, SEASON2016)
     */
    private $season;

    /**
     * @JMS\Type("array<LeagueApi\Match\Classes\Team>")
     * @JMS\SerializedName("teams")
     * @var Team[] $teams
     * Team information
     */
    private $teams;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\Timeline")
     * @JMS\SerializedName("timeline")
     * @var Timeline $timeline
     * Match timeline data (not included by default)
     */
    private $timeline;

    /**
     * @return int
     */
    public function getMapId()
    {
        return $this->mapId;
    }

    /**
     * @return int
     */
    public function getMatchCreation()
    {
        return $this->matchCreation;
    }

    /**
     * @return int
     */
    public function getMatchDuration()
    {
        return $this->matchDuration;
    }

    /**
     * @return int
     */
    public function getMatchId()
    {
        return $this->matchId;
    }

    /**
     * @return string
     */
    public function getMatchMode()
    {
        return $this->matchMode;
    }

    /**
     * @return string
     */
    public function getMatchType()
    {
        return $this->matchType;
    }

    /**
     * @return string
     */
    public function getMatchVersion()
    {
        return $this->matchVersion;
    }

    /**
     * @return ParticipantIdentity[]
     */
    public function getParticipantIdentities()
    {
        return $this->participantIdentities;
    }

    /**
     * @return Participant[]
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @return string
     */
    public function getPlatformId()
    {
        return $this->platformId;
    }

    /**
     * @return string
     */
    public function getQueueType()
    {
        return $this->queueType;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @return Team[]
     */
    public function getTeams()
    {
        return $this->teams;
    }

    /**
     * @return Timeline
     */
    public function getTimeline()
    {
        return $this->timeline;
    }
}