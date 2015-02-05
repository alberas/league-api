<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\Classes;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SpellVarsDto
 */
class SpellVarsDto {
    /**
     * @JMS\Type("array<double>")
     * @var double[] $coeff
     */
    private $coeff;

    /**
     * @JMS\Type("string")
     * @var string $dyn
     */
    private $dyn;

    /**
     * @JMS\Type("string")
     * @var string $key
     */
    private $key;

    /**
     * @JMS\Type("string")
     * @var string $link
     */
    private $link;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("ranksWith")
     * @var string $ranksWith
     */
    private $ranksWith;
} 