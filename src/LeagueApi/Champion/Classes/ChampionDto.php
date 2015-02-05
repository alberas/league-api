<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Champion\Classes;


use JMS\Serializer\Annotation as JMS;

/**
 * Class ChampionDto
 */
class ChampionDto {
    /**
     * @JMS\Type("boolean")
     * @var boolean $active
     * Indicates if the champion is active.
     */
    private $active;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("botEnabled")
     * @var boolean $botEnabled
     * Bot enabled flag (for custom games).
     */
    private $botEnabled;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("botMmEnabled")
     * @var boolean $botMmEnabled
     * Bot Match Made enabled flag (for Co-op vs. AI games).
     */
    private $botMmEnabled;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("freeToPlay")
     * @var boolean $freeToPlay
     * Indicates if the champion is free to play. Free to play champions are rotated periodically.
     */
    private $freeToPlay;

    /**
     * @JMS\Type("integer")
     * @var integer $id
     * Champion ID. For static information correlating to champion IDs, please refer to the LoL Static Data API.
     */
    private $id;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("rankedPlayEnabled")
     * @var boolean $rankedPlayEnabled
     * Ranked play enabled flag.
     */
    private $rankedPlayEnabled;

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @return boolean
     */
    public function isBotEnabled()
    {
        return $this->botEnabled;
    }

    /**
     * @return boolean
     */
    public function isBotMmEnabled()
    {
        return $this->botMmEnabled;
    }

    /**
     * @return boolean
     */
    public function isFreeToPlay()
    {
        return $this->freeToPlay;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return boolean
     */
    public function isRankedPlayEnabled()
    {
        return $this->rankedPlayEnabled;
    }
}