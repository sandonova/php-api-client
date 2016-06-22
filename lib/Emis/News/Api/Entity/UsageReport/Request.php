<?php
namespace Emis\News\Api\Entity\UsageReport;

class Request
{
    /**
     * @var \Emis\News\Api\Entity\UsageReport\Document[]
     */
    private $documents;

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
}