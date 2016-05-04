<?php


namespace LeagueApi\Api;


interface CacheableApi
{
    public function save($filename, $data);

    public function read($filename);
}