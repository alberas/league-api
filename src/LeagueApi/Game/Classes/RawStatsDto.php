<?php


namespace LeagueApi\Game\Classes;


use JMS\Serializer\Annotation as JMS;

/**
 * Class RawStatsDto
 */
class RawStatsDto
{

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

    /**
     * @return int
     */
    public function getAssists()
    {
        return $this->assists;
    }

    /**
     * @return int
     */
    public function getBarracksKilled()
    {
        return $this->barracksKilled;
    }

    /**
     * @return int
     */
    public function getChampionsKilled()
    {
        return $this->championsKilled;
    }

    /**
     * @return int
     */
    public function getConsumablesPurchased()
    {
        return $this->consumablesPurchased;
    }

    /**
     * @return int
     */
    public function getDamageDealtPlayer()
    {
        return $this->damageDealtPlayer;
    }

    /**
     * @return int
     */
    public function getDoubleKills()
    {
        return $this->doubleKills;
    }

    /**
     * @return int
     */
    public function getFirstBlood()
    {
        return $this->firstBlood;
    }

    /**
     * @return int
     */
    public function getGold()
    {
        return $this->gold;
    }

    /**
     * @return int
     */
    public function getGoldEarned()
    {
        return $this->goldEarned;
    }

    /**
     * @return int
     */
    public function getGoldSpent()
    {
        return $this->goldSpent;
    }

    /**
     * @return int
     */
    public function getItem0()
    {
        return $this->item0;
    }

    /**
     * @return int
     */
    public function getItem1()
    {
        return $this->item1;
    }

    /**
     * @return int
     */
    public function getItem2()
    {
        return $this->item2;
    }

    /**
     * @return int
     */
    public function getItem3()
    {
        return $this->item3;
    }

    /**
     * @return int
     */
    public function getItem4()
    {
        return $this->item4;
    }

    /**
     * @return int
     */
    public function getItem5()
    {
        return $this->item5;
    }

    /**
     * @return int
     */
    public function getItem6()
    {
        return $this->item6;
    }

    /**
     * @return int
     */
    public function getItemsPurchased()
    {
        return $this->itemsPurchased;
    }

    /**
     * @return int
     */
    public function getKillingSprees()
    {
        return $this->killingSprees;
    }

    /**
     * @return int
     */
    public function getLargestCriticalStrike()
    {
        return $this->largestCriticalStrike;
    }

    /**
     * @return int
     */
    public function getLargestKillingSpree()
    {
        return $this->largestKillingSpree;
    }

    /**
     * @return int
     */
    public function getLargestMultiKill()
    {
        return $this->largestMultiKill;
    }

    /**
     * @return int
     */
    public function getLegendaryItemsCreated()
    {
        return $this->legendaryItemsCreated;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @return int
     */
    public function getMagicDamageDealtPlayer()
    {
        return $this->magicDamageDealtPlayer;
    }

    /**
     * @return int
     */
    public function getMagicDamageDealtToChampions()
    {
        return $this->magicDamageDealtToChampions;
    }

    /**
     * @return int
     */
    public function getMagicDamageTaken()
    {
        return $this->magicDamageTaken;
    }

    /**
     * @return int
     */
    public function getMinionsDenied()
    {
        return $this->minionsDenied;
    }

    /**
     * @return int
     */
    public function getMinionsKilled()
    {
        return $this->minionsKilled;
    }

    /**
     * @return int
     */
    public function getNeutralMinionsKilled()
    {
        return $this->neutralMinionsKilled;
    }

    /**
     * @return int
     */
    public function getNeutralMinionsKilledEnemyJungle()
    {
        return $this->neutralMinionsKilledEnemyJungle;
    }

    /**
     * @return int
     */
    public function getNeutralMinionsKilledYourJungle()
    {
        return $this->neutralMinionsKilledYourJungle;
    }

    /**
     * @return boolean
     */
    public function isNexusKilled()
    {
        return $this->nexusKilled;
    }

    /**
     * @return int
     */
    public function getNodeCapture()
    {
        return $this->nodeCapture;
    }

    /**
     * @return int
     */
    public function getNodeCaptureAssist()
    {
        return $this->nodeCaptureAssist;
    }

    /**
     * @return int
     */
    public function getNodeNeutralize()
    {
        return $this->nodeNeutralize;
    }

    /**
     * @return int
     */
    public function getNodeNeutralizeAssist()
    {
        return $this->nodeNeutralizeAssist;
    }

    /**
     * @return int
     */
    public function getNumDeaths()
    {
        return $this->numDeaths;
    }

    /**
     * @return int
     */
    public function getNumItemsBought()
    {
        return $this->numItemsBought;
    }

    /**
     * @return int
     */
    public function getObjectivePlayerScore()
    {
        return $this->objectivePlayerScore;
    }

    /**
     * @return int
     */
    public function getPentaKills()
    {
        return $this->pentaKills;
    }

    /**
     * @return int
     */
    public function getPhysicalDamageDealtPlayer()
    {
        return $this->physicalDamageDealtPlayer;
    }

    /**
     * @return int
     */
    public function getPhysicalDamageDealtToChampions()
    {
        return $this->physicalDamageDealtToChampions;
    }

    /**
     * @return int
     */
    public function getPhysicalDamageTaken()
    {
        return $this->physicalDamageTaken;
    }

    /**
     * @return int
     */
    public function getQuadraKills()
    {
        return $this->quadraKills;
    }

    /**
     * @return int
     */
    public function getSightWardsBought()
    {
        return $this->sightWardsBought;
    }

    /**
     * @return int
     */
    public function getSpell1cast()
    {
        return $this->spell1cast;
    }

    /**
     * @return int
     */
    public function getSpell2cast()
    {
        return $this->spell2cast;
    }

    /**
     * @return int
     */
    public function getSpell3cast()
    {
        return $this->spell3cast;
    }

    /**
     * @return int
     */
    public function getSpell4cast()
    {
        return $this->spell4cast;
    }

    /**
     * @return int
     */
    public function getSummonerSpell1Cast()
    {
        return $this->summonerSpell1Cast;
    }

    /**
     * @return int
     */
    public function getSummonerSpell2Cast()
    {
        return $this->summonerSpell2Cast;
    }

    /**
     * @return int
     */
    public function getSuperMonsterKilled()
    {
        return $this->superMonsterKilled;
    }

    /**
     * @return int
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @return int
     */
    public function getTeamObjective()
    {
        return $this->teamObjective;
    }

    /**
     * @return int
     */
    public function getTimePlayed()
    {
        return $this->timePlayed;
    }

    /**
     * @return int
     */
    public function getTotalDamageDealt()
    {
        return $this->totalDamageDealt;
    }

    /**
     * @return int
     */
    public function getTotalDamageDealtToChampions()
    {
        return $this->totalDamageDealtToChampions;
    }

    /**
     * @return int
     */
    public function getTotalDamageTaken()
    {
        return $this->totalDamageTaken;
    }

    /**
     * @return int
     */
    public function getTotalHeal()
    {
        return $this->totalHeal;
    }

    /**
     * @return int
     */
    public function getTotalPlayerScore()
    {
        return $this->totalPlayerScore;
    }

    /**
     * @return int
     */
    public function getTotalScoreRank()
    {
        return $this->totalScoreRank;
    }

    /**
     * @return int
     */
    public function getTotalTimeCrowdControlDealt()
    {
        return $this->totalTimeCrowdControlDealt;
    }

    /**
     * @return int
     */
    public function getTotalUnitsHealed()
    {
        return $this->totalUnitsHealed;
    }

    /**
     * @return int
     */
    public function getTripleKills()
    {
        return $this->tripleKills;
    }

    /**
     * @return int
     */
    public function getTrueDamageDealtPlayer()
    {
        return $this->trueDamageDealtPlayer;
    }

    /**
     * @return int
     */
    public function getTrueDamageDealtToChampions()
    {
        return $this->trueDamageDealtToChampions;
    }

    /**
     * @return int
     */
    public function getTrueDamageTaken()
    {
        return $this->trueDamageTaken;
    }

    /**
     * @return int
     */
    public function getTurretsKilled()
    {
        return $this->turretsKilled;
    }

    /**
     * @return int
     */
    public function getUnrealKills()
    {
        return $this->unrealKills;
    }

    /**
     * @return int
     */
    public function getVictoryPointTotal()
    {
        return $this->victoryPointTotal;
    }

    /**
     * @return int
     */
    public function getVisionWardsBought()
    {
        return $this->visionWardsBought;
    }

    /**
     * @return int
     */
    public function getWardKilled()
    {
        return $this->wardKilled;
    }

    /**
     * @return int
     */
    public function getWardPlaced()
    {
        return $this->wardPlaced;
    }

    /**
     * @return boolean
     */
    public function isWin()
    {
        return $this->win;
    }
}
