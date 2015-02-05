<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\Classes;

use JMS\Serializer\Annotation as JMS;

/**
 * Class BasicDataStatsDto
 */
class BasicDataStatsDto {

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
}