<?php


namespace LeagueApi\MatchList;


use LeagueApi\Api\Api;
use LeagueApi\MatchList\Classes\MatchList;

class MatchListApi extends Api
{
    /**
     * @param string $summonerId The ID of the summoner.
     * @param array $championIds Comma-separated list of champion IDs to use for fetching games.
     * @param array $rankedQueues Comma-separated list of ranked queue types to use for fetching games. Non-ranked queue types will be ignored.
     * @param array $seasons Comma-separated list of seasons to use for fetching games.
     * @param null $beginTime The begin time to use for fetching games specified as epoch milliseconds.
     * @param null $endTime The end time to use for fetching games specified as epoch milliseconds.
     * @param null $beginIndex The begin index to use for fetching games.
     * @param null $endIndex The end index to use for fetching games.
     * @return MatchList
     */
    public function getMatchList($summonerId, array $championIds = array(), array $rankedQueues = array(), array $seasons = array(), $beginTime = null, $endTime = null, $beginIndex = null, $endIndex = null)
    {
        $query = [];

        if (count($championIds) > 0) {
            $query['championIds'] = implode(',', $championIds);
        }

        if (count($rankedQueues) > 0) {
            $query['rankedQueues'] = implode(',', $rankedQueues);
        }

        if (count($seasons) > 0) {
            $query['seasons'] = implode(',', $seasons);
        }

        if ($beginTime) {
            $query['beginTime'] = $beginTime;
        }

        if ($endTime) {
            $query['endTime'] = $endTime;
        }

        if ($beginIndex) {
            $query['beginIndex'] = $beginIndex;
        }

        if ($endIndex) {
            $query['endIndex'] = $endIndex;
        }

        return $this->getData('by-summoner/' . $summonerId, $query, MatchList::class);
    }
}