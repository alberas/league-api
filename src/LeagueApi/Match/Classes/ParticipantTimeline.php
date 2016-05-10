<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class ParticipantTimeline
{
    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("ancientGolemAssistsPerMinCounts")
     * @var ParticipantTimelineData $ancientGolemAssistsPerMinCounts
     * Ancient golem assists per minute timeline counts
     */
    private $ancientGolemAssistsPerMinCounts;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("ancientGolemKillsPerMinCounts")
     * @var ParticipantTimelineData $ancientGolemKillsPerMinCounts
     * Ancient golem kills per minute timeline counts
     */
    private $ancientGolemKillsPerMinCounts;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("assistedLaneDeathsPerMinDeltas")
     * @var ParticipantTimelineData $assistedLaneDeathsPerMinDeltas
     * Assisted lane deaths per minute timeline data
     */
    private $assistedLaneDeathsPerMinDeltas;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("assistedLaneKillsPerMinDeltas")
     * @var ParticipantTimelineData $assistedLaneKillsPerMinDeltas
     * Assisted lane kills per minute timeline data
     */
    private $assistedLaneKillsPerMinDeltas;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("baronAssistsPerMinCounts")
     * @var ParticipantTimelineData $baronAssistsPerMinCounts
     * Baron assists per minute timeline counts
     */
    private $baronAssistsPerMinCounts;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("baronKillsPerMinCounts")
     * @var ParticipantTimelineData $baronKillsPerMinCounts
     * Baron kills per minute timeline counts
     */
    private $baronKillsPerMinCounts;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("creepsPerMinDeltas")
     * @var ParticipantTimelineData $creepsPerMinDeltas
     * Creeps per minute timeline data
     */
    private $creepsPerMinDeltas;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("csDiffPerMinDeltas")
     * @var ParticipantTimelineData $csDiffPerMinDeltas
     * Creep score difference per minute timeline data
     */
    private $csDiffPerMinDeltas;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("damageTakenDiffPerMinDeltas")
     * @var ParticipantTimelineData $damageTakenDiffPerMinDeltas
     * Damage taken difference per minute timeline data
     */
    private $damageTakenDiffPerMinDeltas;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("damageTakenPerMinDeltas")
     * @var ParticipantTimelineData $damageTakenPerMinDeltas
     * Damage taken per minute timeline data
     */
    private $damageTakenPerMinDeltas;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("dragonAssistsPerMinCounts")
     * @var ParticipantTimelineData $dragonAssistsPerMinCounts
     * Dragon assists per minute timeline counts
     */
    private $dragonAssistsPerMinCounts;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("dragonKillsPerMinCounts")
     * @var ParticipantTimelineData $dragonKillsPerMinCounts
     * Dragon kills per minute timeline counts
     */
    private $dragonKillsPerMinCounts;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("elderLizardAssistsPerMinCounts")
     * @var ParticipantTimelineData $elderLizardAssistsPerMinCounts
     * Elder lizard assists per minute timeline counts
     */
    private $elderLizardAssistsPerMinCounts;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("elderLizardKillsPerMinCounts")
     * @var ParticipantTimelineData $elderLizardKillsPerMinCounts
     * Elder lizard kills per minute timeline counts
     */
    private $elderLizardKillsPerMinCounts;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("goldPerMinDeltas")
     * @var ParticipantTimelineData $goldPerMinDeltas
     * Gold per minute timeline data
     */
    private $goldPerMinDeltas;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("inhibitorAssistsPerMinCounts")
     * @var ParticipantTimelineData $inhibitorAssistsPerMinCounts
     * Inhibitor assists per minute timeline counts
     */
    private $inhibitorAssistsPerMinCounts;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("inhibitorKillsPerMinCounts")
     * @var ParticipantTimelineData $inhibitorKillsPerMinCounts
     * Inhibitor kills per minute timeline counts
     */
    private $inhibitorKillsPerMinCounts;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("lane")
     * @var string $lane
     * Participant's lane (Legal values: MID, MIDDLE, TOP, JUNGLE, BOT, BOTTOM)
     */
    private $lane;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("role")
     * @var string $role
     * Participant's role (Legal values: DUO, NONE, SOLO, DUO_CARRY, DUO_SUPPORT)
     */
    private $role;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("towerAssistsPerMinCounts")
     * @var ParticipantTimelineData $towerAssistsPerMinCounts
     * Tower assists per minute timeline counts
     */
    private $towerAssistsPerMinCounts;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("towerKillsPerMinCounts")
     * @var ParticipantTimelineData $towerKillsPerMinCounts
     * Tower kills per minute timeline counts
     */
    private $towerKillsPerMinCounts;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("towerKillsPerMinDeltas")
     * @var ParticipantTimelineData $towerKillsPerMinDeltas
     * Tower kills per minute timeline data
     */
    private $towerKillsPerMinDeltas;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("vilemawAssistsPerMinCounts")
     * @var ParticipantTimelineData $vilemawAssistsPerMinCounts
     * Vilemaw assists per minute timeline counts
     */
    private $vilemawAssistsPerMinCounts;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("vilemawKillsPerMinCounts")
     * @var ParticipantTimelineData $vilemawKillsPerMinCounts
     * Vilemaw kills per minute timeline counts
     */
    private $vilemawKillsPerMinCounts;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("wardsPerMinDeltas")
     * @var ParticipantTimelineData $wardsPerMinDeltas
     * Wards placed per minute timeline data
     */
    private $wardsPerMinDeltas;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("xpDiffPerMinDeltas")
     * @var ParticipantTimelineData $xpDiffPerMinDeltas
     * Experience difference per minute timeline data
     */
    private $xpDiffPerMinDeltas;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\ParticipantTimelineData")
     * @JMS\SerializedName("xpPerMinDeltas")
     * @var ParticipantTimelineData $xpPerMinDeltas
     * Experience per minute timeline data
     */
    private $xpPerMinDeltas;

    /**
     * @return ParticipantTimelineData
     */
    public function getAncientGolemAssistsPerMinCounts()
    {
        return $this->ancientGolemAssistsPerMinCounts;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getAncientGolemKillsPerMinCounts()
    {
        return $this->ancientGolemKillsPerMinCounts;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getAssistedLaneDeathsPerMinDeltas()
    {
        return $this->assistedLaneDeathsPerMinDeltas;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getAssistedLaneKillsPerMinDeltas()
    {
        return $this->assistedLaneKillsPerMinDeltas;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getBaronAssistsPerMinCounts()
    {
        return $this->baronAssistsPerMinCounts;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getBaronKillsPerMinCounts()
    {
        return $this->baronKillsPerMinCounts;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getCreepsPerMinDeltas()
    {
        return $this->creepsPerMinDeltas;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getCsDiffPerMinDeltas()
    {
        return $this->csDiffPerMinDeltas;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getDamageTakenDiffPerMinDeltas()
    {
        return $this->damageTakenDiffPerMinDeltas;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getDamageTakenPerMinDeltas()
    {
        return $this->damageTakenPerMinDeltas;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getDragonAssistsPerMinCounts()
    {
        return $this->dragonAssistsPerMinCounts;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getDragonKillsPerMinCounts()
    {
        return $this->dragonKillsPerMinCounts;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getElderLizardAssistsPerMinCounts()
    {
        return $this->elderLizardAssistsPerMinCounts;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getElderLizardKillsPerMinCounts()
    {
        return $this->elderLizardKillsPerMinCounts;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getGoldPerMinDeltas()
    {
        return $this->goldPerMinDeltas;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getInhibitorAssistsPerMinCounts()
    {
        return $this->inhibitorAssistsPerMinCounts;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getInhibitorKillsPerMinCounts()
    {
        return $this->inhibitorKillsPerMinCounts;
    }

    /**
     * @return string
     */
    public function getLane()
    {
        return $this->lane;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getTowerAssistsPerMinCounts()
    {
        return $this->towerAssistsPerMinCounts;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getTowerKillsPerMinCounts()
    {
        return $this->towerKillsPerMinCounts;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getTowerKillsPerMinDeltas()
    {
        return $this->towerKillsPerMinDeltas;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getVilemawAssistsPerMinCounts()
    {
        return $this->vilemawAssistsPerMinCounts;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getVilemawKillsPerMinCounts()
    {
        return $this->vilemawKillsPerMinCounts;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getWardsPerMinDeltas()
    {
        return $this->wardsPerMinDeltas;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getXpDiffPerMinDeltas()
    {
        return $this->xpDiffPerMinDeltas;
    }

    /**
     * @return ParticipantTimelineData
     */
    public function getXpPerMinDeltas()
    {
        return $this->xpPerMinDeltas;
    }
}
