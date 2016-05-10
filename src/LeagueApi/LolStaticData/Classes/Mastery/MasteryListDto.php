<?php


namespace LeagueApi\LolStaticData\Classes\Mastery;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Classes\ListDto;

/**
 * @method MasteryDto[] getData()
 */
class MasteryListDto extends ListDto
{

    /**
     * @JMS\Type("array<string, LeagueApi\LolStaticData\Classes\Mastery\MasteryDto>")
     * @var MasteryDto[] $data
     */
    protected $data;

    /**
     * @JMS\Type("LeagueApi\LolStaticData\Classes\Mastery\MasteryTreeDto")
     * @var MasteryTreeDto $tree
     */
    private $tree;

    /**
     * @return MasteryTreeDto
     */
    public function getTree()
    {
        return $this->tree;
    }
}
