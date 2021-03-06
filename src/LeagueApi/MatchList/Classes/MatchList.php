<?php


namespace LeagueApi\MatchList\Classes;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as JMS;

class MatchList
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("endIndex")
     * @var integer $endIndex
     */
    private $endIndex;

    /**
     * @JMS\Type("ArrayCollection<LeagueApi\MatchList\Classes\MatchReference>")
     * @JMS\SerializedName("matches")
     * @var ArrayCollection|MatchReference[] $matches
     */
    private $matches;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("startIndex")
     * @var integer $startIndex
     */
    private $startIndex;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("totalGames")
     * @var integer $totalGames
     */
    private $totalGames;

    /**
     * @return integer
     */
    public function getEndIndex()
    {
        return $this->endIndex;
    }

    /**
     * @return ArrayCollection|MatchReference[]
     */
    public function getMatches()
    {
        return $this->matches;
    }

    /**
     * @return integer
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * @return integer
     */
    public function getTotalGames()
    {
        return $this->totalGames;
    }
}
