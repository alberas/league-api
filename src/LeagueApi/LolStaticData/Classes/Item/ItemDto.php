<?php


namespace LeagueApi\LolStaticData\Classes\Item;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\BasicDataDto;

class ItemDto extends BasicDataDto
{
    /**
     * @JMS\Type("array<string, string>")
     * @var array $effect
     */
    private $effect;

    /**
     * @return array
     */
    public function getEffect()
    {
        return $this->effect;
    }
}
