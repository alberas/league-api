<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Rune;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Api\Classes\BasicDataDto;
use LeagueApi\Api\Classes\ListDto;


/**
 * Class RuneListDto
 */
class RuneListDto extends ListDto {

    /**
     * @JMS\Type("LeagueApi\Api\Classes\BasicDataDto")
     * @var BasicDataDto $basic
     */
    private $basic;

    /**
     * @JMS\Type("array<string, LeagueApi\Api\LolStaticData\Classes\Rune\RuneDto>")
     * @var RuneDto[] $data
     */
    protected $data;
} 