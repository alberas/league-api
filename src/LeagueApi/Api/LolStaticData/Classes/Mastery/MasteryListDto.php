<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Mastery;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Api\Classes\ListDto;

/**
 * Class MasteryListDto
 */
class MasteryListDto extends ListDto {

    /**
     * @JMS\Type("array<string, LeagueApi\Api\LolStaticData\Classes\Mastery\MasteryDto>")
     * @var MasteryDto[] $data
     */
    protected $data;

    /**
     * @JMS\Type("LeagueApi\Api\LolStaticData\Classes\Mastery\MasteryTreeDto")
     * @var MasteryTreeDto $tree
     */
    private $tree;
} 