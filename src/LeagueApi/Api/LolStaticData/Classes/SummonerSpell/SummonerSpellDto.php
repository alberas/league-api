<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\SummonerSpell;

use JMS\Serializer\Annotation as JMS;
use LeagueApi\Api\Classes\Spell;

/**
 * Class SummonerSpellDto
 */
class SummonerSpellDto extends Spell {

    /**
     * @JMS\Type("integer")
     * @var integer $id
     */
    private $id;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("summonerLevel")
     * @var integer $summonerLevel
     */
    private $summonerLevel;

    /**
     * @JMS\Type("array<string>")
     * @var string[] $modes
     */
    private $modes;
} 