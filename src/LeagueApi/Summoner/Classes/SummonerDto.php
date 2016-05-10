<?php
/**
 * @author Simeon Kolev
 */

namespace LeagueApi\Summoner\Classes;


use JMS\Serializer\Annotation as JMS;

/**
 * Class SummonerDto
 */
class SummonerDto
{
    /**
     * @JMS\Type("integer")
     * @var integer $id
     * Summoner ID.
     */
    private $id;

    /**
     * @JMS\Type("string")
     * @var string $name
     * Summoner name.
     */
    private $name;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("profileIconId")
     * @var integer $profileIconId
     * ID of the summoner icon associated with the summoner.
     */
    private $profileIconId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("revisionDate")
     * @JMS\Accessor(setter="setRevisionDate", getter="getRevisionDate")
     * @var string $revisionDate
     * Date summoner was last modified specified as epoch milliseconds.
     */
    private $revisionDate;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("summonerLevel")
     * @var integer $summonerLevel
     * Summoner level associated with the summoner.
     */
    private $summonerLevel;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getProfileIconId()
    {
        return $this->profileIconId;
    }

    /**
     * @return int
     */
    public function getSummonerLevel()
    {
        return $this->summonerLevel;
    }

    /**
     * @return string
     */
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }

    /**
     * @param string $revisionDate
     */
    public function setRevisionDate($revisionDate)
    {
        $this->revisionDate = \DateTime::createFromFormat('U', $revisionDate / 1000);;
    }
}