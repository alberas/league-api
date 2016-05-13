<?php


namespace LeagueApi\Api\Enumerations;


class Platform
{
    const BR1  = 'BR1';
    const EUN1 = 'EUN1';
    const EUW1 = 'EUW1';
    const JP1  = 'JP1';
    const KR   = 'KR';
    const LA1  = 'LA1';
    const LA2  = 'LA2';
    const NA1  = 'NA1';
    const OC1  = 'OC1';
    const TR1  = 'TR1';
    const RU   = 'RU';
    const PBE1 = 'PBE1';

    public static function getPlatformByRegion($region)
    {
        switch ($region) {
            case Region::BR:
                return self::BR1;
            case Region::EUNE:
                return self::EUN1;
            case Region::EUW:
                return self::EUW1;
            case Region::JP:
                return self::JP1;
            case Region::KR:
                return self::KR;
            case Region::LAN:
                return self::LA1;
            case Region::LAS:
                return self::LA2;
            case Region::NA:
                return self::NA1;
            case Region::OCE:
                return self::OC1;
            case Region::RU:
                return self::RU;
            case Region::TR:
                return self::TR1;
            case Region::PBE:
                return self::PBE1;
            default:
                throw new \InvalidArgumentException(sprintf('Invalid region "%s" use Region enumeration class constants.', $region));
        }
    }
}
