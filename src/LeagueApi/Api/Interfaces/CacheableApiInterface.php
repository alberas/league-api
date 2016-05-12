<?php


namespace LeagueApi\Api\Interfaces;


interface CacheableApiInterface
{
    public function save($filename, $data);

    public function read($filename);
}
