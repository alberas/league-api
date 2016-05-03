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
}