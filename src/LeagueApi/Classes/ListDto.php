<?php


namespace LeagueApi\Classes;

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

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}