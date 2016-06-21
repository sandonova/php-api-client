<?php
namespace Emis\News\Api\Entity;

class Search
{
    const ORDER_ELASTIC_RELEVANCE = 'relevance';
    const ORDER_ELASTIC_NEWEST = 'date';
    const ORDER_ELASTIC_OLDEST = 'dateasc';
    const ORDER_ELASTIC_DOCUMENT_ID_ASC = 'dcid_asc';
    const ORDER_ELASTIC_DOCUMENT_ID_DESC = 'dcid_desc';

    const ORDER_RELEVANCE = 'relevance';
    const ORDER_NEWEST = 'newest';
    const ORDER_OLDEST = 'oldest';
    const ORDER_DOCUMENT_ID_ASC = 'id_asc';
    const ORDER_DOCUMENT_ID_DESC = 'id_desc';

    /**
     * @var string[]
     */
    private $countries = array();

    /**
     * @var int[]
     */
    private $formats = array();

    /**
     * @var string[]
     */
    private $languages = array();

    /**
     * @var string[]
     */
    private $companies = array();

    /**
     * @var string[]
     */
    private $industries = array();

    /**
     * @var string[]
     */
    private $topics = array();

    /**
     * @var string[]
     */
    private $sourceTypes = array();

    /**
     * @var string[]
     */
    private $publications = array();

    /**
     * @var string[]
     */
    private $publicationTypes = array();

    /**
     * @var \DateTime
     */
    private $startDate = null;

    /**
     * @var \DateTime
     */
    private $endDate = null;

    /**
     * @var string
     */
    private $term = null;

    /**
     * @var int
     */
    private $offset = null;

    /**
     * @var int
     */
    private $limit = null;

    /**
     * @var string
     */
    private $order = null;

    /**
     * @return string[]
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param string[] $countries
     * @return Search
     */
    public function setCountries($countries)
    {
        $this->countries = $countries;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getFormats()
    {
        return $this->formats;
    }

    /**
     * @param int[] $formats
     * @return Search
     */
    public function setFormats($formats)
    {
        $this->formats = $formats;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @param string[] $languages
     * @return Search
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * @param string[] $companies
     * @return Search
     */
    public function setCompanies($companies)
    {
        $this->companies = $companies;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIndustries()
    {
        return $this->industries;
    }

    /**
     * @param string[] $industries
     * @return Search
     */
    public function setIndustries($industries)
    {
        $this->industries = $industries;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * @param string[] $topics
     * @return Search
     */
    public function setTopics($topics)
    {
        $this->topics = $topics;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSourceTypes()
    {
        return $this->sourceTypes;
    }

    /**
     * @param string[] $sourceTypes
     * @return Search
     */
    public function setSourceTypes($sourceTypes)
    {
        $this->sourceTypes = $sourceTypes;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPublications()
    {
        return $this->publications;
    }

    /**
     * @param string[] $publications
     * @return Search
     */
    public function setPublications($publications)
    {
        $this->publications = $publications;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPublicationTypes()
    {
        return $this->publicationTypes;
    }

    /**
     * @param string[] $publicationTypes
     * @param null $allowedPublicationTypes
     * @return Search
     */
    public function setPublicationTypes($publicationTypes, $allowedPublicationTypes = null)
    {
        $this->publicationTypes = $publicationTypes;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return Search
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     * @return Search
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param string $term
     * @return Search
     */
    public function setTerm($term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return Search
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return Search
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        $map = array(
            Search::ORDER_ELASTIC_RELEVANCE => Search::ORDER_RELEVANCE,
            Search::ORDER_ELASTIC_NEWEST => Search::ORDER_NEWEST,
            Search::ORDER_ELASTIC_OLDEST => Search::ORDER_OLDEST,
            Search::ORDER_ELASTIC_DOCUMENT_ID_ASC => Search::ORDER_DOCUMENT_ID_ASC,
            Search::ORDER_ELASTIC_DOCUMENT_ID_DESC => Search::ORDER_DOCUMENT_ID_DESC,
        );

        return $map[$this->order];
    }

    /**
     * @param string $order
     * @return Search
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }
}
