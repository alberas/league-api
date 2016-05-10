<?php


namespace LeagueApi\Match\Classes;

use JMS\Serializer\Annotation as JMS;

class Event
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("ascendedType")
     * @var string $ascendedType
     * The ascended type of the event. Only present if relevant. Note that CLEAR_ASCENDED refers to when a participants kills the ascended player. (Legal values: CHAMPION_ASCENDED, CLEAR_ASCENDED, MINION_ASCENDED)
     */
    private $ascendedType;

    /**
     * @JMS\Type("array<integer>")
     * @JMS\SerializedName("assistingParticipantIds")
     * @var integer[] $assistingParticipantIds
     * The assisting participant IDs of the event. Only present if relevant.
     */
    private $assistingParticipantIds;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("buildingType")
     * @var string $buildingType
     * The building type of the event. Only present if relevant. (Legal values: INHIBITOR_BUILDING, TOWER_BUILDING)
     */
    private $buildingType;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("creatorId")
     * @var integer $creatorId
     * The creator ID of the event. Only present if relevant.
     */
    private $creatorId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("eventType")
     * @var string $eventType
     * Event type. (Legal values: ASCENDED_EVENT, BUILDING_KILL, CAPTURE_POINT, CHAMPION_KILL, ELITE_MONSTER_KILL, ITEM_DESTROYED, ITEM_PURCHASED, ITEM_SOLD, ITEM_UNDO, PORO_KING_SUMMON, SKILL_LEVEL_UP, WARD_KILL, WARD_PLACED)
     */
    private $eventType;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("itemAfter")
     * @var integer $itemAfter
     * The ending item ID of the event. Only present if relevant.
     */
    private $itemAfter;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("itemBefore")
     * @var integer $itemBefore
     * The starting item ID of the event. Only present if relevant.
     */
    private $itemBefore;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("itemId")
     * @var integer $itemId
     * The item ID of the event. Only present if relevant.
     */
    private $itemId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("killerId")
     * @var integer $killerId
     * The killer ID of the event. Only present if relevant. Killer ID 0 indicates a minion.
     */
    private $killerId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("laneType")
     * @var string $laneType
     * The lane type of the event. Only present if relevant. (Legal values: BOT_LANE, MID_LANE, TOP_LANE)
     */
    private $laneType;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("levelUpType")
     * @var string $levelUpType
     * The level up type of the event. Only present if relevant. (Legal values: EVOLVE, NORMAL)
     */
    private $levelUpType;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("monsterType")
     * @var string $monsterType
     * The monster type of the event. Only present if relevant. (Legal values: BARON_NASHOR, BLUE_GOLEM, DRAGON, RED_LIZARD, RIFTHERALD, VILEMAW)
     */
    private $monsterType;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("participantId")
     * @var integer $participantId
     * The participant ID of the event. Only present if relevant.
     */
    private $participantId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("pointCaptured")
     * @var string $pointCaptured
     * The point captured in the event. Only present if relevant. (Legal values: POINT_A, POINT_B, POINT_C, POINT_D, POINT_E)
     */
    private $pointCaptured;

    /**
     * @JMS\Type("LeagueApi\Match\Classes\Position")
     * @JMS\SerializedName("position")
     * @var Position $position
     * The position of the event. Only present if relevant.
     */
    private $position;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("skillSlot")
     * @var integer $skillSlot
     * The skill slot of the event. Only present if relevant.
     */
    private $skillSlot;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("teamId")
     * @var integer $teamId
     * The team ID of the event. Only present if relevant.
     */
    private $teamId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("timestamp")
     * @var integer $timestamp
     * Represents how many milliseconds into the game the event occurred.
     */
    private $timestamp;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("towerType")
     * @var string $towerType
     * The tower type of the event. Only present if relevant. (Legal values: BASE_TURRET, FOUNTAIN_TURRET, INNER_TURRET, NEXUS_TURRET, OUTER_TURRET, UNDEFINED_TURRET)
     */
    private $towerType;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("victimId")
     * @var integer $victimId
     * The victim ID of the event. Only present if relevant.
     */
    private $victimId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("wardType")
     * @var string $wardType
     * The ward type of the event. Only present if relevant. (Legal values: BLUE_TRINKET, SIGHT_WARD, TEEMO_MUSHROOM, UNDEFINED, VISION_WARD, YELLOW_TRINKET, YELLOW_TRINKET_UPGRADE)
     */
    private $wardType;

    /**
     * @return string
     */
    public function getAscendedType()
    {
        return $this->ascendedType;
    }

    /**
     * @return \integer[]
     */
    public function getAssistingParticipantIds()
    {
        return $this->assistingParticipantIds;
    }

    /**
     * @return string
     */
    public function getBuildingType()
    {
        return $this->buildingType;
    }

    /**
     * @return int
     */
    public function getCreatorId()
    {
        return $this->creatorId;
    }

    /**
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @return int
     */
    public function getItemAfter()
    {
        return $this->itemAfter;
    }

    /**
     * @return int
     */
    public function getItemBefore()
    {
        return $this->itemBefore;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return int
     */
    public function getKillerId()
    {
        return $this->killerId;
    }

    /**
     * @return string
     */
    public function getLaneType()
    {
        return $this->laneType;
    }

    /**
     * @return string
     */
    public function getLevelUpType()
    {
        return $this->levelUpType;
    }

    /**
     * @return string
     */
    public function getMonsterType()
    {
        return $this->monsterType;
    }

    /**
     * @return int
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }

    /**
     * @return string
     */
    public function getPointCaptured()
    {
        return $this->pointCaptured;
    }

    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return int
     */
    public function getSkillSlot()
    {
        return $this->skillSlot;
    }

    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * @return string
     */
    public function getTowerType()
    {
        return $this->towerType;
    }

    /**
     * @return int
     */
    public function getVictimId()
    {
        return $this->victimId;
    }

    /**
     * @return string
     */
    public function getWardType()
    {
        return $this->wardType;
    }

    public function getMinutes($padWithZero = false)
    {
        if ($padWithZero) {
            return str_pad($this->getMinutes(), 2, '0', STR_PAD_LEFT);
        }

        return floor($this->getTimestamp() / 1000 / 60);
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function getSeconds($padWithZero = false)
    {
        if ($padWithZero) {
            return str_pad($this->getSeconds(), 2, '0', STR_PAD_LEFT);
        }

        return floor($this->getTimestamp() / 1000 % 60);
    }
}
