<?php


namespace LeagueApi\LolStatus\Classes;

use JMS\Serializer\Annotation as JMS;

class Translation
{
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

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}
