<?php


namespace LeagueApi\Team\Classes;

use JMS\Serializer\Annotation as JMS;

class RosterDto
{
    /**
     * @JMS\Type("array<LeagueApi\Team\Classes\TeamMemberInfoDto>")
     * @JMS\SerializedName("memberList")
     * @var TeamMemberInfoDto[] $memberList
     */
    private $memberList;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("ownerId")
     * @var integer $ownerId
     */
    private $ownerId;

    /**
     * @return TeamMemberInfoDto[]
     */
    public function getMemberList()
    {
        return $this->memberList;
    }

    /**
     * @return int
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }
}