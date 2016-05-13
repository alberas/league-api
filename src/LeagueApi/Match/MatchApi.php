<?php


namespace LeagueApi\Match;


use LeagueApi\Api\RegionApi;
use LeagueApi\Match\Classes\MatchDetail;
use LeagueApi\Traits\VersionTrait;

class MatchApi extends RegionApi
{
    use VersionTrait;
    const VERSION = 'v2.2';

    /**
     * @param $matchId
     * @param bool $includeTimeline
     * @return MatchDetail
     */
    public function getMatchDetail($matchId, $includeTimeline = false)
    {
        $query = [];

        if ($includeTimeline) {
            $query['includeTimeline'] = 'true';
        }

        return $this->getData($matchId, $query, MatchDetail::class);
    }
}
