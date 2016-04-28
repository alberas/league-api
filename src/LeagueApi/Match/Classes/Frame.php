<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class Frame
{
    /**
     * @JMS\Type("array<LeagueApi\Match\Classes\Event>")
     * @JMS\SerializedName("events")
     * @var Event[] $events
     * List of events for this frame.
     */
    private $events;

    /**
     * @JMS\Type("array<string, LeagueApi\Match\Classes\ParticipantFrame>")
     * @JMS\SerializedName("participantFrames")
     * @var ParticipantFrame[] $participantFrames
     * Map of each participant ID to the participant's information for the frame.
     */
    private $participantFrames;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("timestamp")
     * @var integer $timestamp
     * Represents how many milliseconds into the game the frame occurred.
     */
    private $timestamp;

    /**
     * @return Event[]
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @return ParticipantFrame[]
     */
    public function getParticipantFrames()
    {
        return $this->participantFrames;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}