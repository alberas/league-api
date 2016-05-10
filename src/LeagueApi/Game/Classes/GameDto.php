<?php


namespace LeagueApi\Game\Classes;


use JMS\Serializer\Annotation as JMS;

/**
 * Class GameDto
 */
class GameDto
{

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("championId")
     * @var integer $championId
     * Champion ID associated with game.
     */
    private $championId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("createDate")
     * @var integer $createDate
     * Date that end game data was recorded, specified as epoch milliseconds.
     */
    private $createDate;

    /**
     * @JMS\Type("array<LeagueApi\Game\Classes\PlayerDto>")
     * @JMS\SerializedName("fellowPlayers")
     * @var PlayerDto[] $players
     * Other players associated with the game.
     */
    private $fellowPlayers;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("gameId")
     * @var integer $gameId
     * Game ID.
     */
    private $gameId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("gameMode")
     * @var string $gameMode
     * Game mode. (Legal values: CLASSIC, ODIN, ARAM, TUTORIAL, ONEFORALL, ASCENSION, FIRSTBLOOD, KINGPORO)
     */
    private $gameMode;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("gameType")
     * @var string $gameType
     * Game type. (Legal values: CUSTOM_GAME, MATCHED_GAME, TUTORIAL_GAME)
     */
    private $gameType;

    /**
     * @JMS\Type("integer")
     * @var boolean $invalid
     * Invalid flag.
     */
    private $invalid;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("ipEarned")
     * @var integer $ipEarned
     * IP Earned.
     */
    private $ipEarned;

    /**
     * @JMS\Type("integer")
     * @var integer $level
     * Level.
     */
    private $level;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("mapId")
     * @var integer $mapId
     * Map ID.
     */
    private $mapId;

    /**
     * @JMS\Type("integer")
     * @var integer $spell1
     * ID of first summoner spell.
     */
    private $spell1;

    /**
     * @JMS\Type("integer")
     * @var integer $spell2
     * ID of second summoner spell.
     */
    private $spell2;

    /**
     * @JMS\Type("LeagueApi\Game\Classes\RawStatsDto")
     * @var RawStatsDto $stats
     * Statistics associated with the game for this summoner.
     */
    private $stats;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("subType")
     * @var string $subType
     * Game sub-type. (Legal values: NONE, NORMAL, BOT, RANKED_SOLO_5x5, RANKED_PREMADE_3x3, RANKED_PREMADE_5x5, ODIN_UNRANKED, RANKED_TEAM_3x3, RANKED_TEAM_5x5, NORMAL_3x3, BOT_3x3, CAP_5x5, ARAM_UNRANKED_5x5, ONEFORALL_5x5, FIRSTBLOOD_1x1, FIRSTBLOOD_2x2, SR_6x6, URF, URF_BOT, NIGHTMARE_BOT, ASCENSION, HEXAKILL, KING_PORO)
     */
    private /** @noinspection PhpUnusedPrivateFieldInspection */
        $subType;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("teamId")
     * @var integer $teamId
     * Team ID associated with game. Team ID 100 is blue team. Team ID 200 is purple team.
     */
    private $teamId;

    /**
     * @return int
     */
    public function getChampionId()
    {
        return $this->championId;
    }

    /**
     * @return int
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @return PlayerDto[]
     */
    public function getFellowPlayers()
    {
        return $this->fellowPlayers;
    }

    /**
     * @return int
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @return string
     */
    public function getGameMode()
    {
        return $this->gameMode;
    }

    /**
     * @return string
     */
    public function getGameType()
    {
        return $this->gameType;
    }

    /**
     * @return boolean
     */
    public function isInvalid()
    {
        return $this->invalid;
    }

    /**
     * @return int
     */
    public function getIpEarned()
    {
        return $this->ipEarned;
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
    public function getMapId()
    {
        return $this->mapId;
    }

    /**
     * @return int
     */
    public function getSpell1()
    {
        return $this->spell1;
    }

    /**
     * @return int
     */
    public function getSpell2()
    {
        return $this->spell2;
    }

    /**
     * @return RawStatsDto
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @return string
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->teamId;
    }
}
