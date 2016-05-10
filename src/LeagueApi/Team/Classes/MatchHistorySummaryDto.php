<?php


namespace LeagueApi\Team\Classes;

use JMS\Serializer\Annotation as JMS;

class MatchHistorySummaryDto
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("assists")
     * @var integer $assists
     */
    private $assists;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("date")
     * @var integer $date
     * Date that match was completed specified as epoch milliseconds.
     */
    private $date;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("deaths")
     * @var integer $deaths
     */
    private $deaths;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("gameId")
     * @var integer $gameId
     */
    private $gameId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("gameMode")
     * @var string $gameMode
     */
    private $gameMode;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("invalid")
     * @var boolean $invalid
     */
    private $invalid;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("kills")
     * @var integer $kills
     */
    private $kills;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("mapId")
     * @var integer $mapId
     */
    private $mapId;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("opposingTeamKills")
     * @var integer $opposingTeamKills
     */
    private $opposingTeamKills;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("opposingTeamName")
     * @var string $opposingTeamName
     */
    private $opposingTeamName;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("win")
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
    public function getDate()
    {
        return $this->date;
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
     * @return boolean
     */
    public function isInvalid()
    {
        return $this->invalid;
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
    public function getMapId()
    {
        return $this->mapId;
    }

    /**
     * @return int
     */
    public function getOpposingTeamKills()
    {
        return $this->opposingTeamKills;
    }

    /**
     * @return string
     */
    public function getOpposingTeamName()
    {
        return $this->opposingTeamName;
    }

    /**
     * @return boolean
     */
    public function isWin()
    {
        return $this->win;
    }
}