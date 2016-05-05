<?php


namespace LeagueApi\ChampionMastery;


use LeagueApi\Api\Api;
use LeagueApi\ChampionMastery\Classes\ChampionMasteryDTO;

class ChampionMasteryApi extends Api
{
    /**
     * @param string $summonerId Summoner ID associated with the player
     * @param $championId
     * @return ChampionMasteryDTO
     */
    public function getChampionMastery($summonerId, $championId)
    {
        return $this->getData('player/' . $summonerId . '/champion/' . $championId, [], ChampionMasteryDTO::class);
    }

    /**
     * @param $summonerId string $summonerId Summoner ID associated with the player
     * @return ChampionMasteryDTO[]
     */
    public function getChampionMasteries($summonerId)
    {
        return $this->getData('player/' . $summonerId . '/champions', [], 'array<' . ChampionMasteryDTO::class . '>');
    }

    /**
     * @param string $summonerId Summoner ID associated with the player
     * @return integer
     */
    public function getChampionMasteryScore($summonerId)
    {
        return $this->getData('player/' . $summonerId . '/score', [], 'integer');
    }

    /**
     * @param string $summonerId Summoner ID associated with the player
     * @param null $count
     * @return ChampionMasteryDTO[]
     */
    public function getTopChampions($summonerId, $count = null)
    {
        $query = [];

        if ($count) {
            $query['count'] = $count;
        }

        return $this->getData('player/' . $summonerId . '/topchampions', $query, 'array<' . ChampionMasteryDTO::class . '>');
    }
}