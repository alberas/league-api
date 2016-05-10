<?php


namespace LeagueApi\Team\Classes;

use JMS\Serializer\Annotation as JMS;

class TeamMemberInfoDto
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("inviteDate")
     * @var integer $inviteDate
     * Date that team member was invited to team specified as epoch milliseconds.
     */
    private $inviteDate;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("joinDate")
     * @var integer $joinDate
     * Date that team member joined team specified as epoch milliseconds.
     */
    private $joinDate;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("playerId")
     * @var integer $playerId
     */
    private $playerId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     * @var string $status
     */
    private $status;

    /**
     * @return int
     */
    public function getInviteDate()
    {
        return $this->inviteDate;
    }

    /**
     * @return int
     */
    public function getJoinDate()
    {
        return $this->joinDate;
    }

    /**
     * @return int
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
