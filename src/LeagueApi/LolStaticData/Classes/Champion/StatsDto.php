<?php


namespace LeagueApi\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;

/**
 * Class StatsDto
 */
class StatsDto
{
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

    /**
     * @return float
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * @return float
     */
    public function getArmorperlevel()
    {
        return $this->armorperlevel;
    }

    /**
     * @return float
     */
    public function getAttackdamage()
    {
        return $this->attackdamage;
    }

    /**
     * @return float
     */
    public function getAttackdamageperlevel()
    {
        return $this->attackdamageperlevel;
    }

    /**
     * @return float
     */
    public function getAttackrange()
    {
        return $this->attackrange;
    }

    /**
     * @return float
     */
    public function getAttackspeedoffset()
    {
        return $this->attackspeedoffset;
    }

    /**
     * @return float
     */
    public function getAttackspeedperlevel()
    {
        return $this->attackspeedperlevel;
    }

    /**
     * @return float
     */
    public function getCrit()
    {
        return $this->crit;
    }

    /**
     * @return float
     */
    public function getCritperlevel()
    {
        return $this->critperlevel;
    }

    /**
     * @return float
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @return float
     */
    public function getHpperlevel()
    {
        return $this->hpperlevel;
    }

    /**
     * @return float
     */
    public function getHpregen()
    {
        return $this->hpregen;
    }

    /**
     * @return float
     */
    public function getHpregenperlevel()
    {
        return $this->hpregenperlevel;
    }

    /**
     * @return float
     */
    public function getMovespeed()
    {
        return $this->movespeed;
    }

    /**
     * @return float
     */
    public function getMp()
    {
        return $this->mp;
    }

    /**
     * @return float
     */
    public function getMpperlevel()
    {
        return $this->mpperlevel;
    }

    /**
     * @return float
     */
    public function getMpregen()
    {
        return $this->mpregen;
    }

    /**
     * @return float
     */
    public function getMpregenperlevel()
    {
        return $this->mpregenperlevel;
    }

    /**
     * @return float
     */
    public function getSpellblock()
    {
        return $this->spellblock;
    }

    /**
     * @return float
     */
    public function getSpellblockperlevel()
    {
        return $this->spellblockperlevel;
    }
} 