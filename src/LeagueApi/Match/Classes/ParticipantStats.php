<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class ParticipantStats
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("assists")
     * @var integer $assists
     * Number of assists
     */
    private $assists;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("champLevel")
     * @var integer $champLevel
     * Champion level achieved
     */
    private $champLevel;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("combatPlayerScore")
     * @var integer $combatPlayerScore
     * If game was a dominion game, player's combat score, otherwise 0
     */
    private $combatPlayerScore;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("deaths")
     * @var integer $deaths
     * Number of deaths
     */
    private $deaths;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("doubleKills")
     * @var integer $doubleKills
     * Number of double kills
     */
    private $doubleKills;
    
    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("firstBloodAssist")
     * @var boolean $firstBloodAssist
     * Flag indicating if participant got an assist on first blood
     */
    private $firstBloodAssist;
    
    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("firstBloodKill")
     * @var boolean $firstBloodKill
     * Flag indicating if participant got first blood
     */
    private $firstBloodKill;
    
    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("firstInhibitorAssist")
     * @var boolean $firstInhibitorAssist
     * Flag indicating if participant got an assist on the first inhibitor
     */
    private $firstInhibitorAssist;
    
    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("firstInhibitorKill")
     * @var boolean $firstInhibitorKill
     * Flag indicating if participant destroyed the first inhibitor
     */
    private $firstInhibitorKill;
    
    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("firstTowerAssist")
     * @var boolean $firstTowerAssist
     * Flag indicating if participant got an assist on the first tower
     */
    private $firstTowerAssist;
    
    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("firstTowerKill")
     * @var boolean $firstTowerKill
     * Flag indicating if participant destroyed the first tower
     */
    private $firstTowerKill;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("goldEarned")
     * @var integer $goldEarned
     * Gold earned
     */
    private $goldEarned;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("goldSpent")
     * @var integer $goldSpent
     * Gold spent
     */
    private $goldSpent;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("inhibitorKills")
     * @var integer $inhibitorKills
     * Number of inhibitor kills
     */
    private $inhibitorKills;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("item0")
     * @var integer $item0
     * First item ID
     */
    private $item0;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("item1")
     * @var integer $item1
     * Second item ID
     */
    private $item1;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("item2")
     * @var integer $item2
     * Third item ID
     */
    private $item2;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("item3")
     * @var integer $item3
     * Fourth item ID
     */
    private $item3;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("item4")
     * @var integer $item4
     * Fifth item ID
     */
    private $item4;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("item5")
     * @var integer $item5
     * Sixth item ID
     */
    private $item5;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("item6")
     * @var integer $item6
     * Seventh item ID
     */
    private $item6;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("killingSprees")
     * @var integer $killingSprees
     * Number of killing sprees
     */
    private $killingSprees;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("kills")
     * @var integer $kills
     * Number of kills
     */
    private $kills;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("largestCriticalStrike")
     * @var integer $largestCriticalStrike
     * Largest critical strike
     */
    private $largestCriticalStrike;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("largestKillingSpree")
     * @var integer $largestKillingSpree
     * Largest killing spree
     */
    private $largestKillingSpree;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("largestMultiKill")
     * @var integer $largestMultiKill
     * Largest multi kill
     */
    private $largestMultiKill;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("magicDamageDealt")
     * @var integer $magicDamageDealt
     * Magical damage dealt
     */
    private $magicDamageDealt;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("magicDamageDealtToChampions")
     * @var integer $magicDamageDealtToChampions
     * Magical damage dealt to champions
     */
    private $magicDamageDealtToChampions;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("magicDamageTaken")
     * @var integer $magicDamageTaken
     * Magic damage taken
     */
    private $magicDamageTaken;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("minionsKilled")
     * @var integer $minionsKilled
     * Minions killed
     */
    private $minionsKilled;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("neutralMinionsKilled")
     * @var integer $neutralMinionsKilled
     * Neutral minions killed
     */
    private $neutralMinionsKilled;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("neutralMinionsKilledEnemyJungle")
     * @var integer $neutralMinionsKilledEnemyJungle
     * Neutral jungle minions killed in the enemy team's jungle
     */
    private $neutralMinionsKilledEnemyJungle;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("neutralMinionsKilledTeamJungle")
     * @var integer $neutralMinionsKilledTeamJungle
     * Neutral jungle minions killed in your team's jungle
     */
    private $neutralMinionsKilledTeamJungle;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("nodeCapture")
     * @var integer $nodeCapture
     * If game was a dominion game, number of node captures
     */
    private $nodeCapture;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("nodeCaptureAssist")
     * @var integer $nodeCaptureAssist
     * If game was a dominion game, number of node capture assists
     */
    private $nodeCaptureAssist;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("nodeNeutralize")
     * @var integer $nodeNeutralize
     * If game was a dominion game, number of node neutralizations
     */
    private $nodeNeutralize;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("nodeNeutralizeAssist")
     * @var integer $nodeNeutralizeAssist
     * If game was a dominion game, number of node neutralization assists
     */
    private $nodeNeutralizeAssist;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("objectivePlayerScore")
     * @var integer $objectivePlayerScore
     * If game was a dominion game, player's objectives score, otherwise 0
     */
    private $objectivePlayerScore;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("pentaKills")
     * @var integer $pentaKills
     * Number of penta kills
     */
    private $pentaKills;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("physicalDamageDealt")
     * @var integer $physicalDamageDealt
     * Physical damage dealt
     */
    private $physicalDamageDealt;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("physicalDamageDealtToChampions")
     * @var integer $physicalDamageDealtToChampions
     * Physical damage dealt to champions
     */
    private $physicalDamageDealtToChampions;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("physicalDamageTaken")
     * @var integer $physicalDamageTaken
     * Physical damage taken
     */
    private $physicalDamageTaken;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("quadraKills")
     * @var integer $quadraKills
     * Number of quadra kills
     */
    private $quadraKills;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("sightWardsBoughtInGame")
     * @var integer $sightWardsBoughtInGame
     * Sight wards purchased
     */
    private $sightWardsBoughtInGame;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("teamObjective")
     * @var integer $teamObjective
     * If game was a dominion game, number of completed team objectives (i.e., quests)
     */
    private $teamObjective;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalDamageDealt")
     * @var integer $totalDamageDealt
     * Total damage dealt
     */
    private $totalDamageDealt;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalDamageDealtToChampions")
     * @var integer $totalDamageDealtToChampions
     * Total damage dealt to champions
     */
    private $totalDamageDealtToChampions;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalDamageTaken")
     * @var integer $totalDamageTaken
     * Total damage taken
     */
    private $totalDamageTaken;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalHeal")
     * @var integer $totalHeal
     * Total heal amount
     */
    private $totalHeal;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalPlayerScore")
     * @var integer $totalPlayerScore
     * If game was a dominion game, player's total score, otherwise 0
     */
    private $totalPlayerScore;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalScoreRank")
     * @var integer $totalScoreRank
     * If game was a dominion game, team rank of the player's total score (e.g., 1-5)
     */
    private $totalScoreRank;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalTimeCrowdControlDealt")
     * @var integer $totalTimeCrowdControlDealt
     * Total dealt crowd control time
     */
    private $totalTimeCrowdControlDealt;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalUnitsHealed")
     * @var integer $totalUnitsHealed
     * Total units healed
     */
    private $totalUnitsHealed;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("towerKills")
     * @var integer $towerKills
     * Number of tower kills
     */
    private $towerKills;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("tripleKills")
     * @var integer $tripleKills
     * Number of triple kills
     */
    private $tripleKills;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("trueDamageDealt")
     * @var integer $trueDamageDealt
     * True damage dealt
     */
    private $trueDamageDealt;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("trueDamageDealtToChampions")
     * @var integer $trueDamageDealtToChampions
     * True damage dealt to champions
     */
    private $trueDamageDealtToChampions;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("trueDamageTaken")
     * @var integer $trueDamageTaken
     * True damage taken
     */
    private $trueDamageTaken;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("unrealKills")
     * @var integer $unrealKills
     * Number of unreal kills
     */
    private $unrealKills;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("visionWardsBoughtInGame")
     * @var integer $visionWardsBoughtInGame
     * Vision wards purchased
     */
    private $visionWardsBoughtInGame;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("wardsKilled")
     * @var integer $wardsKilled
     * Number of wards killed
     */
    private $wardsKilled;
    
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("wardsPlaced")
     * @var integer $wardsPlaced
     * Number of wards placed
     */
    private $wardsPlaced;
    
    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("winner")
     * @var boolean $winner
     * Flag indicating whether or not the participant won
     */
    private $winner;

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
    public function getChampLevel()
    {
        return $this->champLevel;
    }

    /**
     * @return int
     */
    public function getCombatPlayerScore()
    {
        return $this->combatPlayerScore;
    }

    /**
     * @return int
     */
    public function getDeaths()
    {
        return $this->deaths;
    }

    /**
     * @return int
     */
    public function getDoubleKills()
    {
        return $this->doubleKills;
    }

    /**
     * @return boolean
     */
    public function isFirstBloodAssist()
    {
        return $this->firstBloodAssist;
    }

    /**
     * @return boolean
     */
    public function isFirstBloodKill()
    {
        return $this->firstBloodKill;
    }

    /**
     * @return boolean
     */
    public function isFirstInhibitorAssist()
    {
        return $this->firstInhibitorAssist;
    }

    /**
     * @return boolean
     */
    public function isFirstInhibitorKill()
    {
        return $this->firstInhibitorKill;
    }

    /**
     * @return boolean
     */
    public function isFirstTowerAssist()
    {
        return $this->firstTowerAssist;
    }

    /**
     * @return boolean
     */
    public function isFirstTowerKill()
    {
        return $this->firstTowerKill;
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
    public function getInhibitorKills()
    {
        return $this->inhibitorKills;
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
    public function getKillingSprees()
    {
        return $this->killingSprees;
    }

    /**
     * @return int
     */
    public function getKills()
    {
        return $this->kills;
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
    public function getMagicDamageDealt()
    {
        return $this->magicDamageDealt;
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
    public function getNeutralMinionsKilledTeamJungle()
    {
        return $this->neutralMinionsKilledTeamJungle;
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
    public function getPhysicalDamageDealt()
    {
        return $this->physicalDamageDealt;
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
    public function getSightWardsBoughtInGame()
    {
        return $this->sightWardsBoughtInGame;
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
    public function getTowerKills()
    {
        return $this->towerKills;
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
    public function getTrueDamageDealt()
    {
        return $this->trueDamageDealt;
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
    public function getUnrealKills()
    {
        return $this->unrealKills;
    }

    /**
     * @return int
     */
    public function getVisionWardsBoughtInGame()
    {
        return $this->visionWardsBoughtInGame;
    }

    /**
     * @return int
     */
    public function getWardsKilled()
    {
        return $this->wardsKilled;
    }

    /**
     * @return int
     */
    public function getWardsPlaced()
    {
        return $this->wardsPlaced;
    }

    /**
     * @return boolean
     */
    public function isWinner()
    {
        return $this->winner;
    }
}