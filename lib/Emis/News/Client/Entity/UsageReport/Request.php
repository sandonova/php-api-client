<?php
namespace Emis\News\Client\Entity\UsageReport;

use Emis\Application;

class Request
{
    /**
     * @serializable false
     * @var Application
     */
    private $applicationContext;

    /**
     * @var \Emis\News\Client\Entity\UsageReport\Document[]
     */
    private $documents;

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
     * @return Document[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param Document[] $documents
     * @return Request
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * @param Document $document
     * @return $this
     */
    public function addDocument(Document $document)
    {
        $this->documents[] = $document;
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
}