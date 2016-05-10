<?php


namespace LeagueApi\Classes;

use JMS\Serializer\Annotation as JMS;

/**
 * Class BasicDataStatsDto
 */
class BasicDataStatsDto
{

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatArmorMod")
     * @var double $FlatArmorMod
     */
    private $FlatArmorMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatAttackSpeedMod")
     * @var double $FlatAttackSpeedMod
     */
    private $FlatAttackSpeedMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatBlockMod")
     * @var double $FlatBlockMod
     */
    private $FlatBlockMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatCritChanceMod")
     * @var double $FlatCritChanceMod
     */
    private $FlatCritChanceMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatCritDamageMod")
     * @var double $FlatCritDamageMod
     */
    private $FlatCritDamageMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatEXPBonus")
     * @var double $FlatEXPBonus
     */
    private $FlatEXPBonus;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatEnergyPoolMod")
     * @var double $FlatEnergyPoolMod
     */
    private $FlatEnergyPoolMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatEnergyRegenMod")
     * @var double $FlatEnergyRegenMod
     */
    private $FlatEnergyRegenMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatHPPoolMod")
     * @var double $FlatHPPoolMod
     */
    private $FlatHPPoolMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatHPRegenMod")
     * @var double $FlatHPRegenMod
     */
    private $FlatHPRegenMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatMPPoolMod")
     * @var double $FlatMPPoolMod
     */
    private $FlatMPPoolMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatMPRegenMod")
     * @var double $FlatMPRegenMod
     */
    private $FlatMPRegenMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatMagicDamageMod")
     * @var double $FlatMagicDamageMod
     */
    private $FlatMagicDamageMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatMovementSpeedMod")
     * @var double $FlatMovementSpeedMod
     */
    private $FlatMovementSpeedMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatPhysicalDamageMod")
     * @var double $FlatPhysicalDamageMod
     */
    private $FlatPhysicalDamageMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("FlatSpellBlockMod")
     * @var double $FlatSpellBlockMod
     */
    private $FlatSpellBlockMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentArmorMod")
     * @var double $PercentArmorMod
     */
    private $PercentArmorMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentAttackSpeedMod")
     * @var double $PercentAttackSpeedMod
     */
    private $PercentAttackSpeedMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentBlockMod")
     * @var double $PercentBlockMod
     */
    private $PercentBlockMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentCritChanceMod")
     * @var double $PercentCritChanceMod
     */
    private $PercentCritChanceMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentCritDamageMod")
     * @var double $PercentCritDamageMod
     */
    private $PercentCritDamageMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentDodgeMod")
     * @var double $PercentDodgeMod
     */
    private $PercentDodgeMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentEXPBonus")
     * @var double $PercentEXPBonus
     */
    private $PercentEXPBonus;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentHPPoolMod")
     * @var double $PercentHPPoolMod
     */
    private $PercentHPPoolMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentHPRegenMod")
     * @var double $PercentHPRegenMod
     */
    private $PercentHPRegenMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentLifeStealMod")
     * @var double $PercentLifeStealMod
     */
    private $PercentLifeStealMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentMPPoolMod")
     * @var double $PercentMPPoolMod
     */
    private $PercentMPPoolMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentMPRegenMod")
     * @var double $PercentMPRegenMod
     */
    private $PercentMPRegenMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentMagicDamageMod")
     * @var double $PercentMagicDamageMod
     */
    private $PercentMagicDamageMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentMovementSpeedMod")
     * @var double $PercentMovementSpeedMod
     */
    private $PercentMovementSpeedMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentPhysicalDamageMod")
     * @var double $PercentPhysicalDamageMod
     */
    private $PercentPhysicalDamageMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentSpellBlockMod")
     * @var double $PercentSpellBlockMod
     */
    private $PercentSpellBlockMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("PercentSpellVampMod")
     * @var double $PercentSpellVampMod
     */
    private $PercentSpellVampMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatArmorModPerLevel")
     * @var double $rFlatArmorModPerLevel
     */
    private $rFlatArmorModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatArmorPenetrationMod")
     * @var double $rFlatArmorPenetrationMod
     */
    private $rFlatArmorPenetrationMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatArmorPenetrationModPerLevel")
     * @var double $rFlatArmorPenetrationModPerLevel
     */
    private $rFlatArmorPenetrationModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatCritChanceModPerLevel")
     * @var double $rFlatCritChanceModPerLevel
     */
    private $rFlatCritChanceModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatCritDamageModPerLevel")
     * @var double $rFlatCritDamageModPerLevel
     */
    private $rFlatCritDamageModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatDodgeMod")
     * @var double $rFlatDodgeMod
     */
    private $rFlatDodgeMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatDodgeModPerLevel")
     * @var double $rFlatDodgeModPerLevel
     */
    private $rFlatDodgeModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatEnergyModPerLevel")
     * @var double $rFlatEnergyModPerLevel
     */
    private $rFlatEnergyModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatEnergyRegenModPerLevel")
     * @var double $rFlatEnergyRegenModPerLevel
     */
    private $rFlatEnergyRegenModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatGoldPer10Mod")
     * @var double $rFlatGoldPer10Mod
     */
    private $rFlatGoldPer10Mod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatHPModPerLevel")
     * @var double $rFlatHPModPerLevel
     */
    private $rFlatHPModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatHPRegenModPerLevel")
     * @var double $rFlatHPRegenModPerLevel
     */
    private $rFlatHPRegenModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatMPModPerLevel")
     * @var double $rFlatMPModPerLevel
     */
    private $rFlatMPModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatMPRegenModPerLevel")
     * @var double $rFlatMPRegenModPerLevel
     */
    private $rFlatMPRegenModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatMagicDamageModPerLevel")
     * @var double $rFlatMagicDamageModPerLevel
     */
    private $rFlatMagicDamageModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatMagicPenetrationMod")
     * @var double $rFlatMagicPenetrationMod
     */
    private $rFlatMagicPenetrationMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatMagicPenetrationModPerLevel")
     * @var double $rFlatMagicPenetrationModPerLevel
     */
    private $rFlatMagicPenetrationModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatMovementSpeedModPerLevel")
     * @var double $rFlatMovementSpeedModPerLevel
     */
    private $rFlatMovementSpeedModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatPhysicalDamageModPerLevel")
     * @var double $rFlatPhysicalDamageModPerLevel
     */
    private $rFlatPhysicalDamageModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatSpellBlockModPerLevel")
     * @var double $rFlatSpellBlockModPerLevel
     */
    private $rFlatSpellBlockModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatTimeDeadMod")
     * @var double $rFlatTimeDeadMod
     */
    private $rFlatTimeDeadMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rFlatTimeDeadModPerLevel")
     * @var double $rFlatTimeDeadModPerLevel
     */
    private $rFlatTimeDeadModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rPercentArmorPenetrationMod")
     * @var double $rPercentArmorPenetrationMod
     */
    private $rPercentArmorPenetrationMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rPercentArmorPenetrationModPerLevel")
     * @var double $rPercentArmorPenetrationModPerLevel
     */
    private $rPercentArmorPenetrationModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rPercentAttackSpeedModPerLevel")
     * @var double $rPercentAttackSpeedModPerLevel
     */
    private $rPercentAttackSpeedModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rPercentCooldownMod")
     * @var double $rPercentCooldownMod
     */
    private $rPercentCooldownMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rPercentCooldownModPerLevel")
     * @var double $rPercentCooldownModPerLevel
     */
    private $rPercentCooldownModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rPercentMagicPenetrationMod")
     * @var double $rPercentMagicPenetrationMod
     */
    private $rPercentMagicPenetrationMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rPercentMagicPenetrationModPerLevel")
     * @var double $rPercentMagicPenetrationModPerLevel
     */
    private $rPercentMagicPenetrationModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rPercentMovementSpeedModPerLevel")
     * @var double $rPercentMovementSpeedModPerLevel
     */
    private $rPercentMovementSpeedModPerLevel;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rPercentTimeDeadMod")
     * @var double $rPercentTimeDeadMod
     */
    private $rPercentTimeDeadMod;

    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("rPercentTimeDeadModPerLevel")
     * @var double $rPercentTimeDeadModPerLevel
     */
    private $rPercentTimeDeadModPerLevel;

    /**
     * @return float
     */
    public function getFlatArmorMod()
    {
        return $this->FlatArmorMod;
    }

    /**
     * @return float
     */
    public function getFlatAttackSpeedMod()
    {
        return $this->FlatAttackSpeedMod;
    }

    /**
     * @return float
     */
    public function getFlatBlockMod()
    {
        return $this->FlatBlockMod;
    }

    /**
     * @return float
     */
    public function getFlatCritChanceMod()
    {
        return $this->FlatCritChanceMod;
    }

    /**
     * @return float
     */
    public function getFlatCritDamageMod()
    {
        return $this->FlatCritDamageMod;
    }

    /**
     * @return float
     */
    public function getFlatEXPBonus()
    {
        return $this->FlatEXPBonus;
    }

    /**
     * @return float
     */
    public function getFlatEnergyPoolMod()
    {
        return $this->FlatEnergyPoolMod;
    }

    /**
     * @return float
     */
    public function getFlatEnergyRegenMod()
    {
        return $this->FlatEnergyRegenMod;
    }

    /**
     * @return float
     */
    public function getFlatHPPoolMod()
    {
        return $this->FlatHPPoolMod;
    }

    /**
     * @return float
     */
    public function getFlatHPRegenMod()
    {
        return $this->FlatHPRegenMod;
    }

    /**
     * @return float
     */
    public function getFlatMPPoolMod()
    {
        return $this->FlatMPPoolMod;
    }

    /**
     * @return float
     */
    public function getFlatMPRegenMod()
    {
        return $this->FlatMPRegenMod;
    }

    /**
     * @return float
     */
    public function getFlatMagicDamageMod()
    {
        return $this->FlatMagicDamageMod;
    }

    /**
     * @return float
     */
    public function getFlatMovementSpeedMod()
    {
        return $this->FlatMovementSpeedMod;
    }

    /**
     * @return float
     */
    public function getFlatPhysicalDamageMod()
    {
        return $this->FlatPhysicalDamageMod;
    }

    /**
     * @return float
     */
    public function getFlatSpellBlockMod()
    {
        return $this->FlatSpellBlockMod;
    }

    /**
     * @return float
     */
    public function getPercentArmorMod()
    {
        return $this->PercentArmorMod;
    }

    /**
     * @return float
     */
    public function getPercentAttackSpeedMod()
    {
        return $this->PercentAttackSpeedMod;
    }

    /**
     * @return float
     */
    public function getPercentBlockMod()
    {
        return $this->PercentBlockMod;
    }

    /**
     * @return float
     */
    public function getPercentCritChanceMod()
    {
        return $this->PercentCritChanceMod;
    }

    /**
     * @return float
     */
    public function getPercentCritDamageMod()
    {
        return $this->PercentCritDamageMod;
    }

    /**
     * @return float
     */
    public function getPercentDodgeMod()
    {
        return $this->PercentDodgeMod;
    }

    /**
     * @return float
     */
    public function getPercentEXPBonus()
    {
        return $this->PercentEXPBonus;
    }

    /**
     * @return float
     */
    public function getPercentHPPoolMod()
    {
        return $this->PercentHPPoolMod;
    }

    /**
     * @return float
     */
    public function getPercentHPRegenMod()
    {
        return $this->PercentHPRegenMod;
    }

    /**
     * @return float
     */
    public function getPercentLifeStealMod()
    {
        return $this->PercentLifeStealMod;
    }

    /**
     * @return float
     */
    public function getPercentMPPoolMod()
    {
        return $this->PercentMPPoolMod;
    }

    /**
     * @return float
     */
    public function getPercentMPRegenMod()
    {
        return $this->PercentMPRegenMod;
    }

    /**
     * @return float
     */
    public function getPercentMagicDamageMod()
    {
        return $this->PercentMagicDamageMod;
    }

    /**
     * @return float
     */
    public function getPercentMovementSpeedMod()
    {
        return $this->PercentMovementSpeedMod;
    }

    /**
     * @return float
     */
    public function getPercentPhysicalDamageMod()
    {
        return $this->PercentPhysicalDamageMod;
    }

    /**
     * @return float
     */
    public function getPercentSpellBlockMod()
    {
        return $this->PercentSpellBlockMod;
    }

    /**
     * @return float
     */
    public function getPercentSpellVampMod()
    {
        return $this->PercentSpellVampMod;
    }

    /**
     * @return float
     */
    public function getRFlatArmorModPerLevel()
    {
        return $this->rFlatArmorModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatArmorPenetrationMod()
    {
        return $this->rFlatArmorPenetrationMod;
    }

    /**
     * @return float
     */
    public function getRFlatArmorPenetrationModPerLevel()
    {
        return $this->rFlatArmorPenetrationModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatCritChanceModPerLevel()
    {
        return $this->rFlatCritChanceModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatCritDamageModPerLevel()
    {
        return $this->rFlatCritDamageModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatDodgeMod()
    {
        return $this->rFlatDodgeMod;
    }

    /**
     * @return float
     */
    public function getRFlatDodgeModPerLevel()
    {
        return $this->rFlatDodgeModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatEnergyModPerLevel()
    {
        return $this->rFlatEnergyModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatEnergyRegenModPerLevel()
    {
        return $this->rFlatEnergyRegenModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatGoldPer10Mod()
    {
        return $this->rFlatGoldPer10Mod;
    }

    /**
     * @return float
     */
    public function getRFlatHPModPerLevel()
    {
        return $this->rFlatHPModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatHPRegenModPerLevel()
    {
        return $this->rFlatHPRegenModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatMPModPerLevel()
    {
        return $this->rFlatMPModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatMPRegenModPerLevel()
    {
        return $this->rFlatMPRegenModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatMagicDamageModPerLevel()
    {
        return $this->rFlatMagicDamageModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatMagicPenetrationMod()
    {
        return $this->rFlatMagicPenetrationMod;
    }

    /**
     * @return float
     */
    public function getRFlatMagicPenetrationModPerLevel()
    {
        return $this->rFlatMagicPenetrationModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatMovementSpeedModPerLevel()
    {
        return $this->rFlatMovementSpeedModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatPhysicalDamageModPerLevel()
    {
        return $this->rFlatPhysicalDamageModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatSpellBlockModPerLevel()
    {
        return $this->rFlatSpellBlockModPerLevel;
    }

    /**
     * @return float
     */
    public function getRFlatTimeDeadMod()
    {
        return $this->rFlatTimeDeadMod;
    }

    /**
     * @return float
     */
    public function getRFlatTimeDeadModPerLevel()
    {
        return $this->rFlatTimeDeadModPerLevel;
    }

    /**
     * @return float
     */
    public function getRPercentArmorPenetrationMod()
    {
        return $this->rPercentArmorPenetrationMod;
    }

    /**
     * @return float
     */
    public function getRPercentArmorPenetrationModPerLevel()
    {
        return $this->rPercentArmorPenetrationModPerLevel;
    }

    /**
     * @return float
     */
    public function getRPercentAttackSpeedModPerLevel()
    {
        return $this->rPercentAttackSpeedModPerLevel;
    }

    /**
     * @return float
     */
    public function getRPercentCooldownMod()
    {
        return $this->rPercentCooldownMod;
    }

    /**
     * @return float
     */
    public function getRPercentCooldownModPerLevel()
    {
        return $this->rPercentCooldownModPerLevel;
    }

    /**
     * @return float
     */
    public function getRPercentMagicPenetrationMod()
    {
        return $this->rPercentMagicPenetrationMod;
    }

    /**
     * @return float
     */
    public function getRPercentMagicPenetrationModPerLevel()
    {
        return $this->rPercentMagicPenetrationModPerLevel;
    }

    /**
     * @return float
     */
    public function getRPercentMovementSpeedModPerLevel()
    {
        return $this->rPercentMovementSpeedModPerLevel;
    }

    /**
     * @return float
     */
    public function getRPercentTimeDeadMod()
    {
        return $this->rPercentTimeDeadMod;
    }

    /**
     * @return float
     */
    public function getRPercentTimeDeadModPerLevel()
    {
        return $this->rPercentTimeDeadModPerLevel;
    }
}
