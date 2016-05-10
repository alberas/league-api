<?php


namespace LeagueApi\LolStaticData\Classes\Champion;

use JMS\Serializer\Annotation as JMS;

/**
 * Class InfoDto
 */
class InfoDto
{
    /**
     * @JMS\Type("integer")
     * @var integer $attack
     */
    private $attack;

    /**
     * @JMS\Type("integer")
     * @var integer $defense
     */
    private $defense;

    /**
     * @JMS\Type("integer")
     * @var integer $difficulty
     */
    private $difficulty;

    /**
     * @JMS\Type("integer")
     * @var integer $magic
     */
    private $magic;

    /**
     * @return int
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * @return int
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @return int
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * @return int
     */
    public function getMagic()
    {
        return $this->magic;
    }
} 