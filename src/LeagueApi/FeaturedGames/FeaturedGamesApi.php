<?php


namespace LeagueApi\FeaturedGames;


use LeagueApi\Api\RegionApi;
use LeagueApi\FeaturedGames\Classes\FeaturedGames;

class FeaturedGamesApi extends RegionApi
{
    /**
     * @return FeaturedGames
     */
    public function getFeaturedGames()
    {
        return $this->getData('/observer-mode/rest/featured', [], FeaturedGames::class);
    }
}
