<?php


namespace LeagueApi\FeaturedGames\Classes;

use JMS\Serializer\Annotation as JMS;

class Observer
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("encryptionKey")
     * @var string $encryptionKey
     */
    private $encryptionKey;

    /**
     * @return string
     */
    public function getEncryptionKey()
    {
        return $this->encryptionKey;
    }
}