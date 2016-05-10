<?php


namespace LeagueApi\Team\Classes;

use JMS\Serializer\Annotation as JMS;

class TeamDto
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("createDate")
     * @var integer $createDate
     * Date that team was created specified as epoch milliseconds.
     */
    private $createDate;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("fullId")
     * @var string $fullId
     */
    private $fullId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("lastGameDate")
     * @var integer $lastGameDate
     * Date that last game played by team ended specified as epoch milliseconds.
     */
    private $lastGameDate;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("lastJoinDate")
     * @var integer $lastJoinDate
     * Date that last member joined specified as epoch milliseconds.
     */
    private $lastJoinDate;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("lastJoinedRankedTeamQueueDate")
     * @var integer $lastJoinedRankedTeamQueueDate
     * Date that team last joined the ranked team queue specified as epoch milliseconds.
     */
    private $lastJoinedRankedTeamQueueDate;

    /**
     * @JMS\Type("array<LeagueApi\Team\Classes\MatchHistorySummaryDto>")
     * @JMS\SerializedName("matchHistory")
     * @var MatchHistorySummaryDto[] $matchHistory
     */
    private $matchHistory;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("modifyDate")
     * @var integer $modifyDate
     * Date that team was last modified specified as epoch milliseconds.
     */
    private $modifyDate;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     * @var string $name
     */
    private $name;

    /**
     * @JMS\Type("LeagueApi\Team\Classes\RosterDto")
     * @JMS\SerializedName("roster")
     * @var RosterDto $roster
     */
    private $roster;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("secondLastJoinDate")
     * @var integer $secondLastJoinDate
     * Date that second to last member joined specified as epoch milliseconds.
     */
    private $secondLastJoinDate;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     * @var string $status
     */
    private $status;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("tag")
     * @var string $tag
     */
    private $tag;

    /**
     * @JMS\Type("array<LeagueApi\Team\Classes\TeamStatDetailDto>")
     * @JMS\SerializedName("teamStatDetails")
     * @var TeamStatDetailDto[] $teamStatDetails
     */
    private $teamStatDetails;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("thirdLastJoinDate")
     * @var integer $thirdLastJoinDate
     * Date that third to last member joined specified as epoch milliseconds.
     */
    private $thirdLastJoinDate;

    /**
     * @return int
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @return string
     */
    public function getFullId()
    {
        return $this->fullId;
    }

    /**
     * @return int
     */
    public function getLastGameDate()
    {
        return $this->lastGameDate;
    }

    /**
     * @return int
     */
    public function getLastJoinDate()
    {
        return $this->lastJoinDate;
    }

    /**
     * @return int
     */
    public function getLastJoinedRankedTeamQueueDate()
    {
        return $this->lastJoinedRankedTeamQueueDate;
    }

    /**
     * @return MatchHistorySummaryDto[]
     */
    public function getMatchHistory()
    {
        return $this->matchHistory;
    }

    /**
     * @return int
     */
    public function getModifyDate()
    {
        return $this->modifyDate;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return RosterDto
     */
    public function getRoster()
    {
        return $this->roster;
    }

    /**
     * @return int
     */
    public function getSecondLastJoinDate()
    {
        return $this->secondLastJoinDate;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @return TeamStatDetailDto[]
     */
    public function getTeamStatDetails()
    {
        return $this->teamStatDetails;
    }

    /**
     * @return int
     */
    public function getThirdLastJoinDate()
    {
        return $this->thirdLastJoinDate;
    }
}