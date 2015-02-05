<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStatus\Classes;

use JMS\Serializer\Annotation as JMS;

class Translation {
    /**
     * @JMS\Type("string")
     * @var string $content
     */
    private $content;

    /**
     * @JMS\Type("string")
     * @var string $locale
     */
    private $locale;

    /**
     * @JMS\Type("string")
     * @var string $updated_at
     */
    private $updated_at;
}