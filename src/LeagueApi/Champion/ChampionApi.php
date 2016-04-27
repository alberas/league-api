<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Champion;


use LeagueApi\Api\Api;
use LeagueApi\Champion\Classes\ChampionDto;
use LeagueApi\Champion\Classes\ChampionListDto;

class ChampionApi extends Api{

    /**
     * @param boolean $freeToPlay Optional filter param to retrieve only free to play champions.
     * @return ChampionListDto
     */
    public function getChampions($freeToPlay = false)
    {
        $query = array();

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