<?php


namespace LeagueApi\LolStaticData\Classes\Item;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ItemTreeDto
 * @package Api\LolStaticData\Item
 */
class ItemTreeDto
{

    /**
     * @JMS\Type("string")
     * @var string $header
     */
    private $header;

    /**
     * @JMS\Type("array<string>")
     * @var string[] $tags
     */
    private $tags;

    /**
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @return \string[]
     */
    public function getTags()
    {
        return $this->tags;
    }
} 