<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStatus\Classes;

use JMS\Serializer\Annotation as JMS;

class Service {
    /**
     * @JMS\Type("array<LeagueApi\Api\LolStatus\Classes\Incident>")
     * @var \LeagueApi\Api\LolStatus\Classes\Incident[] $incidents
     */
    private $incidents;

    /**
     * @JMS\Type("string")
     * @var string $name
     */
    private $name;

    /**
     * @JMS\Type("string")
     * @var string $slug
     */
    private $slug;

    /**
     * @JMS\Type("string")
     * @var string $status
     */
    private $status;
}