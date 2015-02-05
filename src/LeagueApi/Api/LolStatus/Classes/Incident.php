<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStatus\Classes;

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
     * @JMS\Type("array<LeagueApi\Api\LolStatus\Classes\Message>")
     * @var \LeagueApi\Api\LolStatus\Classes\Message[] $updates
     */
    private $updates;
}