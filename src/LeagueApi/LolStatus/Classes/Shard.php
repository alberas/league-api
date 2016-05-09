<?php


namespace LeagueApi\LolStatus\Classes;

use JMS\Serializer\Annotation as JMS;

class Shard {
    /**
     * @JMS\Type("string")
     * @var string $hostname
     */
    private $hostname;

    /**
     * @JMS\Type("array<string>")
     * @var array $locales
     */
    private $locales;

    /**
     * @JMS\Type("string")
     * @var string $name
     */
    private $name;

    /**
     * @JMS\Type("string")
     * @var string $region_tag
     */
    private $region_tag;

    /**
     * @JMS\Type("string")
     * @var string $slug
     */
    private $slug;

    /**
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * @return array
     */
    public function getLocales()
    {
        return $this->locales;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getRegionTag()
    {
        return $this->region_tag;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}