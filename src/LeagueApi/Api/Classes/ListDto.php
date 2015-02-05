<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\Classes;

use JMS\Serializer\Annotation as JMS;

class ListDto {
    /**
     * @JMS\Type("array<string, string>")
     * @var array $data
     */
    protected $data;

    /**
     * @JMS\Type("string")
     * @var string $version
     */

    protected $version;

    /**
     * @JMS\Type("string")
     * @var string $type
     */
    protected $type;
}