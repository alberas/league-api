<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class ParticipantTimelineData
{
    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("tenToTwenty")
     * @var double $tenToTwenty
     * Value per minute from 10 min to 20 min
     */
    private $tenToTwenty;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("thirtyToEnd")
     * @var double $thirtyToEnd
     * Value per minute from 30 min to the end of the game
     */
    private $thirtyToEnd;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("twentyToThirty")
     * @var double $twentyToThirty
     * Value per minute from 20 min to 30 min
     */
    private $twentyToThirty;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("zeroToTen")
     * @var double $zeroToTen
     * Value per minute from the beginning of the game to 10 min
     */
    private $zeroToTen;

    /**
     * @return float
     */
    public function getTenToTwenty()
    {
        return $this->tenToTwenty;
    }

    /**
     * @return float
     */
    public function getThirtyToEnd()
    {
        return $this->thirtyToEnd;
    }

    /**
     * @return float
     */
    public function getTwentyToThirty()
    {
        return $this->twentyToThirty;
    }

    /**
     * @return float
     */
    public function getZeroToTen()
    {
        return $this->zeroToTen;
    }
}