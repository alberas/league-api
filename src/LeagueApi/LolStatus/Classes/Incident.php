<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\LolStatus\Classes;

use JMS\Serializer\Annotation as JMS;

class Incident {
    /**
     * @JMS\Type("boolean")
     * @var boolean $active
     */
    private $active;

    /**
     * @JMS\Type("string")
     * @var string $created_at
     */
    private $created_at;

    /**
     * @JMS\Type("integer")
     * @var int $id
     */
    private $id;

    /**
     * @JMS\Type("array<LeagueApi\LolStatus\Classes\Message>")
     * @var \LeagueApi\LolStatus\Classes\Message[] $updates
     */
    private $updates;

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Message[]
     */
    public function getUpdates()
    {
        return $this->updates;
    }
}