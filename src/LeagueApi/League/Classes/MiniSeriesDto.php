<?php


namespace LeagueApi\League\Classes;

use JMS\Serializer\Annotation as JMS;

class MiniSeriesDto
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("losses")
     * @var integer $losses
     * Number of current losses in the mini series.
     */
    private $losses;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("progress")
     * @var string $progress
     * String showing the current, sequential mini series progress where 'W' represents a win, 'L' represents a loss, and 'N' represents a game that hasn't been played yet.
     */
    private $progress;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("target")
     * @var integer $target
     * Number of wins required for promotion.
     */
    private $target;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("wins")
     * @var integer $wins
     * Number of current wins in the mini series.
     */
    private $wins;

    /**
     * @return int
     */
    public function getLosses()
    {
        return $this->losses;
    }

    /**
     * @return string
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * @return int
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @return int
     */
    public function getWins()
    {
        return $this->wins;
    }
}
