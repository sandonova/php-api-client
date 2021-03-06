<?php
namespace Emis\Entity\Api\Document;

class Document
{
    const FORMAT_HTML = 1;
    const FORMAT_PDF = 2;
    const FORMAT_DOC = 3;
    const FORMAT_XLS = 4;

    public static $FORMAT_ENUM = array(
        self::FORMAT_HTML => 'HTML',
        self::FORMAT_PDF => 'PDF',
        self::FORMAT_DOC => 'DOC',
        self::FORMAT_XLS => 'XLS'
    );

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $format;

    /**
     * @var string
     */
    private $body;

    /**
     * @var \Emis\News\Api\Entity\Language
     */
    private $language;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $updateDate;

    /**
     * @var \Emis\Entity\Api\Dictionary\Company[]
     */
    private $companies = array();

    /**
     * @var \Emis\Entity\Api\Dictionary\Country[]
     */
    private $countries = array();

    /**
     * @var \Emis\Entity\Api\Dictionary\Topic[]
     */
    private $topics = array();

    /**
     * @var \Emis\Entity\Api\Dictionary\Industry[]
     */
    private $industries = array();

    /**
     * @var \Emis\Entity\Api\Dictionary\File[]
     */
    private $files = array();

    /**
     * @var \Emis\Entity\Api\Dictionary\SourceType
     */
    private $sourceType;

    /**
     * @var \Emis\Entity\Api\Dictionary\Publication
     */
    private $publication;

    /**
     * @var \Emis\Entity\Api\Dictionary\PublicationType[]
     */
    private $publicationTypes = array();

    /**
     * @var string
     */
    private $link = array();

    /**
     * @var int
     */
    private $pages = 0;

    /**
     * @var int
     */
    private $size = 0;

    /**
     * @return int
     */
    public function getId()
    {
        return (int)$this->id;
    }

    /**
     * @param int $id
     * @return Document
     */
    public function setId($id)
    {
        $this->id = (int)$id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Document
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     * @return Document
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return Document
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param Language $language
     * @return Document
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return Document
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * @param \DateTime $updateDate
     * @return Document
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
        return $this;
    }

    /**
     * @return Company[]
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * @param Company[] $companies
     * @return Document
     */
    public function setCompanies($companies)
    {
        $this->companies = $companies;
        return $this;
    }

    /**
     * @return Country[]
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param Country[] $countries
     * @return Document
     */
    public function setCountries($countries)
    {
        $this->countries = $countries;
        return $this;
    }

    /**
     * @return Topic[]
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * @param Topic[] $topics
     * @return Document
     */
    public function setTopics($topics)
    {
        $this->topics = $topics;
        return $this;
    }

    /**
     * @return Industry[]
     */
    public function getIndustries()
    {
        return $this->industries;
    }

    /**
     * @param Industry[] $industries
     * @return Document
     */
    public function setIndustries($industries)
    {
        $this->industries = $industries;
        return $this;
    }

    /**
     * @return File[]
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param File[] $files
     * @return Document
     */
    public function setFiles($files)
    {
        $this->files = $files;
        return $this;
    }

    /**
     * @return SourceType
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * @param SourceType $sourceType
     * @return Document
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
        return $this;
    }

    /**
     * @return Publication
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * @param Publication $publication
     * @return Document
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
        return $this;
    }

    /**
     * @return PublicationType[]
     */
    public function getPublicationTypes()
    {
        return $this->publicationTypes;
    }

    /**
     * @param PublicationType[] $publicationTypes
     * @return Document
     */
    public function setPublicationTypes($publicationTypes)
    {
        $this->publicationTypes = $publicationTypes;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return Document
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return int
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param int $pages
     * @return Document
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return Document
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
}
