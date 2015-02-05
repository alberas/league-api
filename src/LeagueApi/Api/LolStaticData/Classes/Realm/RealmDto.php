<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\Api\LolStaticData\Classes\Realm;

use JMS\Serializer\Annotation as JMS;

/**
 * Class RealmDto
 */
class RealmDto {
    /**
     * @JMS\Type("string")
     * @var string $cdn
     * The base CDN url.
     */
    private $cdn;

    /**
     * @JMS\Type("string")
     * @var string $css
     * Latest changed version of Dragon Magic's css file.
     */
    private $css;

    /**
     * @JMS\Type("string")
     * @var string $dd
     * Latest changed version of Dragon Magic.
     */
    private $dd;

    /**
     * @JMS\Type("string")
     * @var string $l
     * Default language for this realm.
     */
    private $l;

    /**
     * @JMS\Type("string")
     * @var string $lg
     * Legacy script mode for IE6 or older.
     */
    private $lg;

    /**
     * @JMS\Type("array<string>")
     * @var string[] $n
     * Latest changed version for each data type listed.
     */
    private $n;

    /**
     * @JMS\Type("integer")
     * @var integer $profileiconmax
     * Special behavior number identifying the largest profileicon id that can be used under 500. Any profileicon that is requested between this number and 500 should be mapped to 0.
     */
    private $profileiconmax;

    /**
     * @JMS\Type("string")
     * @var string $store
     * Additional api data drawn from other sources that may be related to data dragon functionality.
     */
    private $store;

    /**
     * @JMS\Type("string")
     * @var string $v
     * Current version of this file for this realm.
     */
    private $v;

} 