<?php


namespace LeagueApi\LolStaticData\Classes\Mastery;

use JMS\Serializer\Annotation as JMS;

/**
 * Class MasteryTreeItemDto
 */
class MasteryTreeItemDto
{

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("masteryId")
     * @var integer $masteryId
     */
    private $masteryId;

    /**
     * @JMS\Type("string")
     * @var string $prereq
     */
    private $prereq;

    /**
     * @return int
     */
    public function getMasteryId()
    {
        return $this->masteryId;
    }

    /**
     * @return string
     */
    public function getPrereq()
    {
        return $this->prereq;
    }
}
