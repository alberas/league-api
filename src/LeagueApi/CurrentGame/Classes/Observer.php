<?php


namespace LeagueApi\CurrentGame\Classes;

use JMS\Serializer\Annotation as JMS;

class Observer
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("encryptionKey")
     * @var string $encryptionKey
     * Key used to decrypt the spectator grid game data for playback
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