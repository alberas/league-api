<?php


namespace LeagueApi\Api;


interface CacheableApiInterface
{
    public function save($filename, $data);

    public function read($filename);
}