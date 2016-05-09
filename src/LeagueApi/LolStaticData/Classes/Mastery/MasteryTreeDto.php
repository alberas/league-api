<?php


namespace LeagueApi\LolStaticData\Classes\Mastery;

use JMS\Serializer\Annotation as JMS;

/**
 * Class MasteryTreeDto
 */
class MasteryTreeDto {

    /**
     * @JMS\Type("array<LeagueApi\LolStaticData\Classes\Mastery\MasteryTreeListDto>")
     * @JMS\SerializedName("Defense")
     * @var MasteryTreeListDto[] $defense
     */
    private $Defense;

    /**
     * @JMS\Type("array<LeagueApi\LolStaticData\Classes\Mastery\MasteryTreeListDto>")
     * @JMS\SerializedName("Offense")
     * @var MasteryTreeListDto[] $Offense
     */
    private $Offense;

    /**
     * @JMS\Type("array<LeagueApi\LolStaticData\Classes\Mastery\MasteryTreeListDto>")
     * @JMS\SerializedName("Utility")
     * @var MasteryTreeListDto[] $Utility
     */
    private $Utility;

    /**
     * @return MasteryTreeListDto[]
     */
    public function getDefense()
    {
        return $this->Defense;
    }

    /**
     * @return MasteryTreeListDto[]
     */
    public function getOffense()
    {
        return $this->Offense;
    }

    /**
     * @return MasteryTreeListDto[]
     */
    public function getUtility()
    {
        return $this->Utility;
    }
} 