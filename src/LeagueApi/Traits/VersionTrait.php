<?php


namespace LeagueApi\Traits;


trait VersionTrait
{
    public function getVersion()
    {
        return static::VERSION;
    }
}
