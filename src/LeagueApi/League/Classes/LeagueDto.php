<?php


namespace LeagueApi\League\Classes;

use JMS\Serializer\Annotation as JMS;

class LeagueDto
{
    /**
     * @JMS\Type("array<LeagueApi\League\Classes\LeagueEntryDto>")
     * @JMS\SerializedName("entries")
     * @var LeagueEntryDto[] entries
     * The requested league entries.
     */
    private $entries;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     * @var string $name
     * This name is an internal place-holder name only. Display and localization of names in the game client are handled client-side.
     */
    private $name;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("participantId")
     * @var string $participantId
     * Specifies the relevant participant that is a member of this league (i.e., a requested summoner ID, a requested team ID, or the ID of a team to which one of the requested summoners belongs). Only present when full league is requested so that participant's entry can be identified. Not present when individual entry is requested.
     */
    private $participantId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("queue")
     * @var string $queue
     * The league's queue type. (Legal values: RANKED_SOLO_5x5, RANKED_TEAM_3x3, RANKED_TEAM_5x5)
     */
    private $queue;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("tier")
     * @var string $tier
     * The league's tier. (Legal values: CHALLENGER, MASTER, DIAMOND, PLATINUM, GOLD, SILVER, BRONZE)
     */
    private $tier;

    /**
     * @return LeagueEntryDto[]
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }

    /**
     * @return string
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * @return string
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * Sort league entries by league points
     * @param string $direction "ASC" or "DESC"
     */
    public function sortEntriesByLeaguePoints($direction = 'ASC')
    {
        usort($this->entries, function (LeagueEntryDto $left, LeagueEntryDto $right) {
            if ($left->getLeaguePoints() > $right->getLeaguePoints()) {
                return 1;
            }

            if ($left->getLeaguePoints() < $right->getLeaguePoints()) {
                return -1;
            }

            return 0;
        });

        if ($direction == 'DESC') {
            $this->entries = array_reverse($this->entries);
        }
    }
}
