<?php


namespace LeagueApi\LolStatus\Classes;

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
     * @JMS\Type("array<LeagueApi\LolStatus\Classes\Translation>")
     * @var \LeagueApi\LolStatus\Classes\Translation[] $translations
     */
    private $translations;

    /**
     * @JMS\Type("string")
     * @var string $updated_at
     */
    private $updated_at;

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

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
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * @return Translation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

}