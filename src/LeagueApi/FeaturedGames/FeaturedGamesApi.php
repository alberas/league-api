<?php


namespace LeagueApi\FeaturedGames;


use LeagueApi\Api\Api;
use LeagueApi\FeaturedGames\Classes\FeaturedGames;

class FeaturedGamesApi extends Api
{
    /**
     * @return FeaturedGames
     */
    public function getFeaturedGames()
    {
        return $this->getData('/observer-mode/rest/featured', [], FeaturedGames::class);
    }
}
