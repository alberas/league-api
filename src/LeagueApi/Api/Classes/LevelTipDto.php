<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\Classes;

use JMS\Serializer\Annotation as JMS;

/**
 * Class LevelTipDto
 */
class LevelTipDto {
    /**
     * @JMS\Type("array<string>")
     * @var string[] $effect
     */
    private $effect;

    /**
     * @JMS\Type("array<string>")
     * @var string[] $label
     */
    private $label;
}