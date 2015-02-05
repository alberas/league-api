<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStatus\Classes;

use JMS\Serializer\Annotation as JMS;

class Message {
    /**
     * @JMS\Type("string")
     * @var string $author
     */
    private $author;

    /**
     * @JMS\Type("string")
     * @var string $content
     */
    private $content;

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
     * @JMS\Type("string")
     * @var string $severity
     */
    private $severity;

    /**
     * @JMS\Type("array<LeagueApi\Api\LolStatus\Classes\Translation>")
     * @var \LeagueApi\Api\LolStatus\Classes\Translation[] $translations
     */
    private $translations;

    /**
     * @JMS\Type("string")
     * @var string $updated_at
     */
    private $updated_at;
}