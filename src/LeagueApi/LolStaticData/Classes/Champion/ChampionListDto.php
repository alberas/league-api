<?php


namespace LeagueApi\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\ListDto;

/**
 * @method ChampionDto[] getData()
 */
class ChampionListDto extends ListDto
{
    /**
     * @JMS\Type("array<string, LeagueApi\LolStaticData\Classes\Champion\ChampionDto>")
     * @var ChampionDto[] $data
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
