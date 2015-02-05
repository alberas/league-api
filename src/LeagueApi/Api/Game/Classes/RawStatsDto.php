<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\Game\Classes;


use JMS\Serializer\Annotation as JMS;

/**
 * Class RawStatsDto
 */
class RawStatsDto {

    /**
     * @JMS\Type("integer")
     * @var integer $assists
     */
    private $assists;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("barracksKilled")
     * @var integer $barracksKilled
     */
    private $barracksKilled;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("championsKilled")
     * @var integer $championsKilled
     */
    private $championsKilled;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("consumablesPurchased")
     * @var integer $consumablesPurchased
     */
    private $consumablesPurchased;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("damageDealtPlayer")
     * @var integer $damageDealtPlayer
     */
    private $damageDealtPlayer;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("doubleKills")
     * @var integer $doubleKills
     */
    private $doubleKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("firstBlood")
     * @var integer $firstBlood
     */
    private $firstBlood;

    /**
     * @JMS\Type("integer")
     * @var integer $gold
     */
    private $gold;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("goldEarned")
     * @var integer $goldEarned
     */
    private $goldEarned;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("goldSpent")
     * @var integer $goldSpent
     */
    private $goldSpent;

    /**
     * @JMS\Type("integer")
     * @var integer $item0
     */
    private $item0;

    /**
     * @JMS\Type("integer")
     * @var integer $item1
     */
    private $item1;

    /**
     * @JMS\Type("integer")
     * @var integer $item2
     */
    private $item2;

    /**
     * @JMS\Type("integer")
     * @var integer $item3
     */
    private $item3;

    /**
     * @JMS\Type("integer")
     * @var integer $item4
     */
    private $item4;

    /**
     * @JMS\Type("integer")
     * @var integer $item5
     */
    private $item5;

    /**
     * @JMS\Type("integer")
     * @var integer $item6
     */
    private $item6;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("itemsPurchased")
     * @var integer $itemsPurchased
     */
    private $itemsPurchased;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("killingSprees")
     * @var integer $killingSprees
     */
    private $killingSprees;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("largestCriticalStrike")
     * @var integer $largestCriticalStrike
     */
    private $largestCriticalStrike;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("largestKillingSpree")
     * @var integer $largestKillingSpree
     */
    private $largestKillingSpree;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("largestMultiKill")
     * @var integer $largestMultiKill
     */
    private $largestMultiKill;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("legendaryItemsCreated")
     * @var integer $legendaryItemsCreated
     */
    private $legendaryItemsCreated;

    /**
     * @JMS\Type("integer")
     * @var integer $level
     */
    private $level;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("magicDamageDealtPlayer")
     * @var integer $magicDamageDealtPlayer
     */
    private $magicDamageDealtPlayer;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("magicDamageDealtToChampions")
     * @var integer $magicDamageDealtToChampions
     */
    private $magicDamageDealtToChampions;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("magicDamageTaken")
     * @var integer $magicDamageTaken
     */
    private $magicDamageTaken;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("minionsDenied")
     * @var integer $minionsDenied
     */
    private $minionsDenied;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("minionsKilled")
     * @var integer $minionsKilled
     */
    private $minionsKilled;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("neutralMinionsKilled")
     * @var integer $neutralMinionsKilled
     */
    private $neutralMinionsKilled;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("neutralMinionsKilledEnemyJungle")
     * @var integer $neutralMinionsKilledEnemyJungle
     */
    private $neutralMinionsKilledEnemyJungle;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("neutralMinionsKilledYourJungle")
     * @var integer $neutralMinionsKilledYourJungle
     */
    private $neutralMinionsKilledYourJungle;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("nexusKilled")
     * @var boolean $nexusKilled
     */
    private $nexusKilled;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("nodeCapture")
     * @var integer $nodeCapture
     */
    private $nodeCapture;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("nodeCaptureAssist")
     * @var integer $nodeCaptureAssist
     */
    private $nodeCaptureAssist;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("nodeNeutralize")
     * @var integer $nodeNeutralize
     */
    private $nodeNeutralize;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("nodeNeutralizeAssist")
     * @var integer $nodeNeutralizeAssist
     */
    private $nodeNeutralizeAssist;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("numDeaths")
     * @var integer $numDeaths
     */
    private $numDeaths;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("numItemsBought")
     * @var integer $numItemsBought
     */
    private $numItemsBought;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("objectivePlayerScore")
     * @var integer $objectivePlayerScore
     */
    private $objectivePlayerScore;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("pentaKills")
     * @var integer $pentaKills
     */
    private $pentaKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("physicalDamageDealtPlayer")
     * @var integer $physicalDamageDealtPlayer
     */
    private $physicalDamageDealtPlayer;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("physicalDamageDealtToChampions")
     * @var integer $physicalDamageDealtToChampions
     */
    private $physicalDamageDealtToChampions;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("physicalDamageTaken")
     * @var integer $physicalDamageTaken
     */
    private $physicalDamageTaken;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("quadraKills")
     * @var integer $quadraKills
     */
    private $quadraKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("sightWardsBought")
     * @var integer $sightWardsBought
     */
    private $sightWardsBought;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("spell1cast")
     * @var integer $spell1cast
     */
    private $spell1cast;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("spell2cast")
     * @var integer $spell2cast
     */
    private $spell2cast;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("spell3cast")
     * @var integer $spell3cast
     */
    private $spell3cast;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("spell4cast")
     * @var integer $spell4cast
     */
    private $spell4cast;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("summonerSpell1Cast")
     * @var integer $summonerSpell1Cast
     */
    private $summonerSpell1Cast;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("summonerSpell2Cast")
     * @var integer $summonerSpell2Cast
     */
    private $summonerSpell2Cast;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("superMonsterKilled")
     * @var integer $superMonsterKilled
     */
    private $superMonsterKilled;

    /**
     * @JMS\Type("integer")
     * @var integer $team
     */
    private $team;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("teamObjective")
     * @var integer $teamObjective
     */
    private $teamObjective;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("timePlayed")
     * @var integer $timePlayed
     */
    private $timePlayed;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalDamageDealt")
     * @var integer $totalDamageDealt
     */
    private $totalDamageDealt;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalDamageDealtToChampions")
     * @var integer $totalDamageDealtToChampions
     */
    private $totalDamageDealtToChampions;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalDamageTaken")
     * @var integer $totalDamageTaken
     */
    private $totalDamageTaken;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalHeal")
     * @var integer $totalHeal
     */
    private $totalHeal;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalPlayerScore")
     * @var integer $totalPlayerScore
     */
    private $totalPlayerScore;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalScoreRank")
     * @var integer $totalScoreRank
     */
    private $totalScoreRank;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalTimeCrowdControlDealt")
     * @var integer $totalTimeCrowdControlDealt
     */
    private $totalTimeCrowdControlDealt;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalUnitsHealed")
     * @var integer $totalUnitsHealed
     */
    private $totalUnitsHealed;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("tripleKills")
     * @var integer $tripleKills
     */
    private $tripleKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("trueDamageDealtPlayer")
     * @var integer $trueDamageDealtPlayer
     */
    private $trueDamageDealtPlayer;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("trueDamageDealtToChampions")
     * @var integer $trueDamageDealtToChampions
     */
    private $trueDamageDealtToChampions;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("trueDamageTaken")
     * @var integer $trueDamageTaken
     */
    private $trueDamageTaken;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("turretsKilled")
     * @var integer $turretsKilled
     */
    private $turretsKilled;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("unrealKills")
     * @var integer $unrealKills
     */
    private $unrealKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("victoryPointTotal")
     * @var integer $victoryPointTotal
     */
    private $victoryPointTotal;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("visionWardsBought")
     * @var integer $visionWardsBought
     */
    private $visionWardsBought;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("wardKilled")
     * @var integer $wardKilled
     */
    private $wardKilled;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("wardPlaced")
     * @var integer $wardPlaced
     */
    private $wardPlaced;

    /**
     * @JMS\Type("boolean")
     * @var boolean $win
     */
    private $win;
} 