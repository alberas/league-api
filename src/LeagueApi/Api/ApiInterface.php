<?php


namespace LeagueApi\Api;


interface ApiInterface
{
    public function getData($url, array $query, $dataType);
}