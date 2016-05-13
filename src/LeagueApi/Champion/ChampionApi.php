<?php


namespace LeagueApi\Champion;


use LeagueApi\Api\RegionApi;
use LeagueApi\Champion\Classes\ChampionDto;
use LeagueApi\Champion\Classes\ChampionListDto;
use LeagueApi\Traits\VersionTrait;

class ChampionApi extends RegionApi
{
    const VERSION = 'v1.2';
    use VersionTrait;

    /**
     * @param boolean $freeToPlay Optional filter param to retrieve only free to play champions.
     * @return ChampionListDto
     */
    public function getChampions($freeToPlay = false)
    {
        $query = [];

        if ($freeToPlay) {
            $query['freeToPlay'] = 'true';
        }

        return $this->getData('champion', $query, ChampionListDto::class);
    }

    /**
     * @param $id
     * @return ChampionDto
     */
    public function getChampion($id)
    {
        return $this->getData('champion/' . $id, [], ChampionDto::class);
    }
}
