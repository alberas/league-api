<?php


namespace LeagueApi\Match;


use LeagueApi\Api\Api;
use LeagueApi\Match\Classes\MatchDetail;

class MatchApi extends Api
{
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
