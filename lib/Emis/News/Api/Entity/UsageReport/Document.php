<?php
namespace Emis\News\Api\Entity\UsageReport;

use Emis\Application;

class Document
{
    /**
     * @serializable false
     * @var Application
     */
    private $applicationContext;

    /**
     * @var int
     */
    private $documentId;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $publication;

    /**
     * @var \DateTime
     */
    private $accessTime;

    /**
     * @return Application
     */
    public function getApplicationContext()
    {
        return $this->applicationContext;
    }

    /**
     * @param Application $applicationContext
     * @return Request
     */
    public function setApplicationContext($applicationContext)
    {
        $this->applicationContext = $applicationContext;
        return $this;
    }

    /**
     * UsageReportRequest constructor.
     * @param Application $applicationContext
     */
    public function __construct(Application $applicationContext)
    {
        $this->setApplicationContext($applicationContext);
    }

    /**
     * @return int
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * @param int $documentId
     * @return Document
     */
    public function setDocumentId($documentId)
    {
        $this->documentId = $documentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Document
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * @param string $publication
     * @return Document
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAccessTime()
    {
        return $this->accessTime;
    }

    /**
     * @param \DateTime $accessTime
     * @return Document
     */
    public function setAccessTime($accessTime)
    {
        $this->accessTime = $accessTime;
        return $this;
    }
}