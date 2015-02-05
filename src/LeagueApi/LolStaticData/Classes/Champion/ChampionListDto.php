<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\ListDto;

class ChampionListDto extends ListDto {
    /**
     * @JMS\Type("array<string, LeagueApi\LolStaticData\Classes\Champion\ChampionDto>")
     * @var \LeagueApi\LolStaticData\Classes\Champion\ChampionDto[] $data
     */
    protected $data;

    /**
     * @JMS\Type("string")
     * @var string $format
     */
    private $format;

    /**
     * @JMS\Type("array<string, string>")
     * @var array $keys
     */
    private $keys;

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @return array
     */
    public function getKeys()
    {
        return $this->keys;
    }
}