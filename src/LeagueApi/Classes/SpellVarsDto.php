<?php


namespace LeagueApi\Classes;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SpellVarsDto
 */
class SpellVarsDto {
    /**
     * @JMS\Type("array<double>")
     * @var double[] $coeff
     */
    private $coeff;

    /**
     * @JMS\Type("string")
     * @var string $dyn
     */
    private $dyn;

    /**
     * @JMS\Type("string")
     * @var string $key
     */
    private $key;

    /**
     * @JMS\Type("string")
     * @var string $link
     */
    private $link;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("ranksWith")
     * @var string $ranksWith
     */
    private $ranksWith;

    /**
     * @return \double[]
     */
    public function getCoeff()
    {
        return $this->coeff;
    }

    /**
     * @return string
     */
    public function getDyn()
    {
        return $this->dyn;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return string
     */
    public function getRanksWith()
    {
        return $this->ranksWith;
    }
} 