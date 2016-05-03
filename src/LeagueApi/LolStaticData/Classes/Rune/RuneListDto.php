<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\LolStaticData\Classes\Rune;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\BasicDataDto;
use LeagueApi\Classes\ListDto;


/**
 * @method RuneDto[] getData()
 */
class RuneListDto extends ListDto {

    /**
     * @JMS\Type("LeagueApi\Classes\BasicDataDto")
     * @var BasicDataDto $basic
     */
    private $basic;

    /**
     * @JMS\Type("array<string, LeagueApi\LolStaticData\Classes\Rune\RuneDto>")
     * @var RuneDto[] $data
     */
    protected $data;

    /**
     * @return BasicDataDto
     */
    public function getBasic()
    {
        return $this->basic;
    }
} 