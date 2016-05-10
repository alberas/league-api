<?php


namespace LeagueApi\Stats\Classes;

use JMS\Serializer\Annotation as JMS;

class AggregatedStatsDto
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("averageAssists")
     * @var integer $averageAssists
     * Dominion only.
     */
    private $averageAssists;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("averageChampionsKilled")
     * @var integer $averageChampionsKilled
     * Dominion only.
     */
    private $averageChampionsKilled;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("averageCombatPlayerScore")
     * @var integer $averageCombatPlayerScore
     * Dominion only.
     */
    private $averageCombatPlayerScore;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("averageNodeCapture")
     * @var integer $averageNodeCapture
     * Dominion only.
     */
    private $averageNodeCapture;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("averageNodeCaptureAssist")
     * @var integer $averageNodeCaptureAssist
     * Dominion only.
     */
    private $averageNodeCaptureAssist;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("averageNodeNeutralize")
     * @var integer $averageNodeNeutralize
     * Dominion only.
     */
    private $averageNodeNeutralize;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("averageNodeNeutralizeAssist")
     * @var integer $averageNodeNeutralizeAssist
     * Dominion only.
     */
    private $averageNodeNeutralizeAssist;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("averageNumDeaths")
     * @var integer $averageNumDeaths
     * Dominion only.
     */
    private $averageNumDeaths;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("averageObjectivePlayerScore")
     * @var integer $averageObjectivePlayerScore
     * Dominion only.
     */
    private $averageObjectivePlayerScore;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("averageTeamObjective")
     * @var integer $averageTeamObjective
     * Dominion only.
     */
    private $averageTeamObjective;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("averageTotalPlayerScore")
     * @var integer $averageTotalPlayerScore
     * Dominion only.
     */
    private $averageTotalPlayerScore;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("botGamesPlayed")
     * @var integer $botGamesPlayed
     */
    private $botGamesPlayed;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("killingSpree")
     * @var integer $killingSpree
     */
    private $killingSpree;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxAssists")
     * @var integer $maxAssists
     * Dominion only.
     */
    private $maxAssists;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxChampionsKilled")
     * @var integer $maxChampionsKilled
     */
    private $maxChampionsKilled;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxCombatPlayerScore")
     * @var integer $maxCombatPlayerScore
     * Dominion only.
     */
    private $maxCombatPlayerScore;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxLargestCriticalStrike")
     * @var integer $maxLargestCriticalStrike
     */
    private $maxLargestCriticalStrike;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxLargestKillingSpree")
     * @var integer $maxLargestKillingSpree
     */
    private $maxLargestKillingSpree;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxNodeCapture")
     * @var integer $maxNodeCapture
     * Dominion only.
     */
    private $maxNodeCapture;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxNodeCaptureAssist")
     * @var integer $maxNodeCaptureAssist
     * Dominion only.
     */
    private $maxNodeCaptureAssist;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxNodeNeutralize")
     * @var integer $maxNodeNeutralize
     * Dominion only.
     */
    private $maxNodeNeutralize;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxNodeNeutralizeAssist")
     * @var integer $maxNodeNeutralizeAssist
     * Dominion only.
     */
    private $maxNodeNeutralizeAssist;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxNumDeaths")
     * @var integer $maxNumDeaths
     * Only returned for ranked statistics.
     */
    private $maxNumDeaths;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxObjectivePlayerScore")
     * @var integer $maxObjectivePlayerScore
     * Dominion only.
     */
    private $maxObjectivePlayerScore;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxTeamObjective")
     * @var integer $maxTeamObjective
     * Dominion only.
     */
    private $maxTeamObjective;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxTimePlayed")
     * @var integer $maxTimePlayed
     */
    private $maxTimePlayed;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxTimeSpentLiving")
     * @var integer $maxTimeSpentLiving
     */
    private $maxTimeSpentLiving;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxTotalPlayerScore")
     * @var integer $maxTotalPlayerScore
     * Dominion only.
     */
    private $maxTotalPlayerScore;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("mostChampionKillsPerSession")
     * @var integer $mostChampionKillsPerSession
     */
    private $mostChampionKillsPerSession;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("mostSpellsCast")
     * @var integer $mostSpellsCast
     */
    private $mostSpellsCast;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("normalGamesPlayed")
     * @var integer $normalGamesPlayed
     */
    private $normalGamesPlayed;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("rankedPremadeGamesPlayed")
     * @var integer $rankedPremadeGamesPlayed
     */
    private $rankedPremadeGamesPlayed;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("rankedSoloGamesPlayed")
     * @var integer $rankedSoloGamesPlayed
     */
    private $rankedSoloGamesPlayed;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalAssists")
     * @var integer $totalAssists
     */
    private $totalAssists;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalChampionKills")
     * @var integer $totalChampionKills
     */
    private $totalChampionKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalDamageDealt")
     * @var integer $totalDamageDealt
     */
    private $totalDamageDealt;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalDamageTaken")
     * @var integer $totalDamageTaken
     */
    private $totalDamageTaken;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalDeathsPerSession")
     * @var integer $totalDeathsPerSession
     * Only returned for ranked statistics.
     */
    private $totalDeathsPerSession;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalDoubleKills")
     * @var integer $totalDoubleKills
     */
    private $totalDoubleKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalFirstBlood")
     * @var integer $totalFirstBlood
     */
    private $totalFirstBlood;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalGoldEarned")
     * @var integer $totalGoldEarned
     */
    private $totalGoldEarned;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalHeal")
     * @var integer $totalHeal
     */
    private $totalHeal;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalMagicDamageDealt")
     * @var integer $totalMagicDamageDealt
     */
    private $totalMagicDamageDealt;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalMinionKills")
     * @var integer $totalMinionKills
     */
    private $totalMinionKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalNeutralMinionsKilled")
     * @var integer $totalNeutralMinionsKilled
     */
    private $totalNeutralMinionsKilled;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalNodeCapture")
     * @var integer $totalNodeCapture
     * Dominion only.
     */
    private $totalNodeCapture;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalNodeNeutralize")
     * @var integer $totalNodeNeutralize
     * Dominion only.
     */
    private $totalNodeNeutralize;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalPentaKills")
     * @var integer $totalPentaKills
     */
    private $totalPentaKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalPhysicalDamageDealt")
     * @var integer $totalPhysicalDamageDealt
     */
    private $totalPhysicalDamageDealt;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalQuadraKills")
     * @var integer $totalQuadraKills
     */
    private $totalQuadraKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalSessionsLost")
     * @var integer $totalSessionsLost
     */
    private $totalSessionsLost;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalSessionsPlayed")
     * @var integer $totalSessionsPlayed
     */
    private $totalSessionsPlayed;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalSessionsWon")
     * @var integer $totalSessionsWon
     */
    private $totalSessionsWon;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalTripleKills")
     * @var integer $totalTripleKills
     */
    private $totalTripleKills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalTurretsKilled")
     * @var integer $totalTurretsKilled
     */
    private $totalTurretsKilled;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalUnrealKills")
     * @var integer $totalUnrealKills
     */
    private $totalUnrealKills;

    /**
     * @return int
     */
    public function getAverageAssists()
    {
        return $this->averageAssists;
    }

    /**
     * @return int
     */
    public function getAverageChampionsKilled()
    {
        return $this->averageChampionsKilled;
    }

    /**
     * @return int
     */
    public function getAverageCombatPlayerScore()
    {
        return $this->averageCombatPlayerScore;
    }

    /**
     * @return int
     */
    public function getAverageNodeCapture()
    {
        return $this->averageNodeCapture;
    }

    /**
     * @return int
     */
    public function getAverageNodeCaptureAssist()
    {
        return $this->averageNodeCaptureAssist;
    }

    /**
     * @return int
     */
    public function getAverageNodeNeutralize()
    {
        return $this->averageNodeNeutralize;
    }

    /**
     * @return int
     */
    public function getAverageNodeNeutralizeAssist()
    {
        return $this->averageNodeNeutralizeAssist;
    }

    /**
     * @return int
     */
    public function getAverageNumDeaths()
    {
        return $this->averageNumDeaths;
    }

    /**
     * @return int
     */
    public function getAverageObjectivePlayerScore()
    {
        return $this->averageObjectivePlayerScore;
    }

    /**
     * @return int
     */
    public function getAverageTeamObjective()
    {
        return $this->averageTeamObjective;
    }

    /**
     * @return int
     */
    public function getAverageTotalPlayerScore()
    {
        return $this->averageTotalPlayerScore;
    }

    /**
     * @return int
     */
    public function getBotGamesPlayed()
    {
        return $this->botGamesPlayed;
    }

    /**
     * @return int
     */
    public function getKillingSpree()
    {
        return $this->killingSpree;
    }

    /**
     * @return int
     */
    public function getMaxAssists()
    {
        return $this->maxAssists;
    }

    /**
     * @return int
     */
    public function getMaxChampionsKilled()
    {
        return $this->maxChampionsKilled;
    }

    /**
     * @return int
     */
    public function getMaxCombatPlayerScore()
    {
        return $this->maxCombatPlayerScore;
    }

    /**
     * @return int
     */
    public function getMaxLargestCriticalStrike()
    {
        return $this->maxLargestCriticalStrike;
    }

    /**
     * @return int
     */
    public function getMaxLargestKillingSpree()
    {
        return $this->maxLargestKillingSpree;
    }

    /**
     * @return int
     */
    public function getMaxNodeCapture()
    {
        return $this->maxNodeCapture;
    }

    /**
     * @return int
     */
    public function getMaxNodeCaptureAssist()
    {
        return $this->maxNodeCaptureAssist;
    }

    /**
     * @return int
     */
    public function getMaxNodeNeutralize()
    {
        return $this->maxNodeNeutralize;
    }

    /**
     * @return int
     */
    public function getMaxNodeNeutralizeAssist()
    {
        return $this->maxNodeNeutralizeAssist;
    }

    /**
     * @return int
     */
    public function getMaxNumDeaths()
    {
        return $this->maxNumDeaths;
    }

    /**
     * @return int
     */
    public function getMaxObjectivePlayerScore()
    {
        return $this->maxObjectivePlayerScore;
    }

    /**
     * @return int
     */
    public function getMaxTeamObjective()
    {
        return $this->maxTeamObjective;
    }

    /**
     * @return int
     */
    public function getMaxTimePlayed()
    {
        return $this->maxTimePlayed;
    }

    /**
     * @return int
     */
    public function getMaxTimeSpentLiving()
    {
        return $this->maxTimeSpentLiving;
    }

    /**
     * @return int
     */
    public function getMaxTotalPlayerScore()
    {
        return $this->maxTotalPlayerScore;
    }

    /**
     * @return int
     */
    public function getMostChampionKillsPerSession()
    {
        return $this->mostChampionKillsPerSession;
    }

    /**
     * @return int
     */
    public function getMostSpellsCast()
    {
        return $this->mostSpellsCast;
    }

    /**
     * @return int
     */
    public function getNormalGamesPlayed()
    {
        return $this->normalGamesPlayed;
    }

    /**
     * @return int
     */
    public function getRankedPremadeGamesPlayed()
    {
        return $this->rankedPremadeGamesPlayed;
    }

    /**
     * @return int
     */
    public function getRankedSoloGamesPlayed()
    {
        return $this->rankedSoloGamesPlayed;
    }

    /**
     * @return int
     */
    public function getTotalAssists()
    {
        return $this->totalAssists;
    }

    /**
     * @return int
     */
    public function getTotalChampionKills()
    {
        return $this->totalChampionKills;
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
    public function getTotalDamageTaken()
    {
        return $this->totalDamageTaken;
    }

    /**
     * @return int
     */
    public function getTotalDeathsPerSession()
    {
        return $this->totalDeathsPerSession;
    }

    /**
     * @return int
     */
    public function getTotalDoubleKills()
    {
        return $this->totalDoubleKills;
    }

    /**
     * @return int
     */
    public function getTotalFirstBlood()
    {
        return $this->totalFirstBlood;
    }

    /**
     * @return int
     */
    public function getTotalGoldEarned()
    {
        return $this->totalGoldEarned;
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
    public function getTotalMagicDamageDealt()
    {
        return $this->totalMagicDamageDealt;
    }

    /**
     * @return int
     */
    public function getTotalMinionKills()
    {
        return $this->totalMinionKills;
    }

    /**
     * @return int
     */
    public function getTotalNeutralMinionsKilled()
    {
        return $this->totalNeutralMinionsKilled;
    }

    /**
     * @return int
     */
    public function getTotalNodeCapture()
    {
        return $this->totalNodeCapture;
    }

    /**
     * @return int
     */
    public function getTotalNodeNeutralize()
    {
        return $this->totalNodeNeutralize;
    }

    /**
     * @return int
     */
    public function getTotalPentaKills()
    {
        return $this->totalPentaKills;
    }

    /**
     * @return int
     */
    public function getTotalPhysicalDamageDealt()
    {
        return $this->totalPhysicalDamageDealt;
    }

    /**
     * @return int
     */
    public function getTotalQuadraKills()
    {
        return $this->totalQuadraKills;
    }

    /**
     * @return int
     */
    public function getTotalSessionsLost()
    {
        return $this->totalSessionsLost;
    }

    /**
     * @return int
     */
    public function getTotalSessionsPlayed()
    {
        return $this->totalSessionsPlayed;
    }

    /**
     * @return int
     */
    public function getTotalSessionsWon()
    {
        return $this->totalSessionsWon;
    }

    /**
     * @return int
     */
    public function getTotalTripleKills()
    {
        return $this->totalTripleKills;
    }

    /**
     * @return int
     */
    public function getTotalTurretsKilled()
    {
        return $this->totalTurretsKilled;
    }

    /**
     * @return int
     */
    public function getTotalUnrealKills()
    {
        return $this->totalUnrealKills;
    }
}
