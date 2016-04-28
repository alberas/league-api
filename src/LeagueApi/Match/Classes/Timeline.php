<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class Timeline
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("frameInterval")
     * @var integer $frameInterval
     * Time between each returned frame in milliseconds.
     */
    private $frameInterval;

    /**
     * @JMS\Type("array<LeagueApi\Match\Classes\Frame>")
     * @JMS\SerializedName("frames")
     * @var Frame[] $frames
     * List of timeline frames for the game.
     */
    private $frames;

    /**
     * @return int
     */
    public function getFrameInterval()
    {
        return $this->frameInterval;
    }

    /**
     * @return Frame[]
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * @param $participantId
     * @return ParticipantFrame[]
     */
    public function getFramesForParticipant($participantId)
    {
        return array_map(function(Frame $frame) use ($participantId) {
            return $frame->getParticipantFrames()[$participantId];
        }, $this->frames);
    }

    /**
     * @param $participantId
     * @return [Event[]]
     */
    public function getEventsForParticipant($participantId)
    {
        /**
         * @var [Event[]] $events
         */
        $events = array_map(function(Frame $frame) use ($participantId) {

            $frameEvents = $frame->getEvents();

            if (count($frameEvents) > 0) {
                return array_filter($frameEvents, function (Event $event) use ($participantId) {
                    return $event->getParticipantId() == $participantId;
                });
            }

            return array();

        }, $this->frames);

        return $events;
    }
}