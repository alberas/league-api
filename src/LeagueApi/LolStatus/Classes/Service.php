<?php


namespace LeagueApi\LolStatus\Classes;

use JMS\Serializer\Annotation as JMS;

class Service {
    /**
     * @JMS\Type("array<LeagueApi\LolStatus\Classes\Incident>")
     * @var \LeagueApi\LolStatus\Classes\Incident[] $incidents
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

    /**
     * @return Incident[]
     */
    public function getIncidents()
    {
        return $this->incidents;
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
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}