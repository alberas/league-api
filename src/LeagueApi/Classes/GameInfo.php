<?php


namespace LeagueApi\Classes;

use JMS\Serializer\Annotation as JMS;

class GameInfo
{
    /**
     * @JMS\Type("array<LeagueApi\Classes\BannedChampion>")
     * @JMS\SerializedName("bannedChampions")
     * @var BannedChampion[] $bannedChampions
     * Banned champion information
     */
    private $bannedChampions;

    /**
     * @return BannedChampion[]
     */
    public function getBannedChampions()
    {
        return $this->bannedChampions;
    }
}