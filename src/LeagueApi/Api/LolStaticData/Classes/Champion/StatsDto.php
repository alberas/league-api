<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;

/**
 * Class StatsDto
 */
class StatsDto {
    /**
     * @JMS\Type("double")
     * @var double $armor
     */
    private $armor;

    /**
     * @JMS\Type("double")
     * @var double $armorPerLevel
     */
    private $armorperlevel;

    /**
     * @JMS\Type("double")
     * @var double $attackdamage
     */
    private $attackdamage;

    /**
     * @JMS\Type("double")
     * @var double $attackdamageperlevel
     */
    private $attackdamageperlevel;

    /**
     * @JMS\Type("double")
     * @var double $attackRange
     */
    private $attackrange;

    /**
     * @JMS\Type("double")
     * @var double $attackSpeedOffset
     */
    private $attackspeedoffset;

    /**
     * @JMS\Type("double")
     * @var double $attackSpeedPerLevel
     */
    private $attackspeedperlevel;

    /**
     * @JMS\Type("double")
     * @var double $crit
     */
    private $crit;

    /**
     * @JMS\Type("double")
     * @var double $critPerLevel
     */
    private $critperlevel;

    /**
     * @JMS\Type("double")
     * @var double $hp
     */
    private $hp;

    /**
     * @JMS\Type("double")
     * @var double $hpPerLevel
     */
    private $hpperlevel;

    /**
     * @JMS\Type("double")
     * @var double $hpRegen
     */
    private $hpregen;

    /**
     * @JMS\Type("double")
     * @var double $hpRegenPerLevel
     */
    private $hpregenperlevel;

    /**
     * @JMS\Type("double")
     * @var double $movespeed
     */
    private $movespeed;

    /**
     * @JMS\Type("double")
     * @var double $mp
     */
    private $mp;

    /**
     * @JMS\Type("double")
     * @var double $mpPerLevel
     */
    private $mpperlevel;

    /**
     * @JMS\Type("double")
     * @var double $mpRegen
     */
    private $mpregen;

    /**
     * @JMS\Type("double")
     * @var double $mpRegenPerLevel
     */
    private $mpregenperlevel;

    /**
     * @JMS\Type("double")
     * @var double $spellBlock
     */
    private $spellblock;

    /**
     * @JMS\Type("double")
     * @var double $spellBlockPerLevel
     */
    private $spellblockperlevel;
} 