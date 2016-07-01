<?php
namespace Emis\Entity\Api\UsageReport;

class Document
{
    /**
     * @var int
     */
    private $documentId;

    /**
     * @var \DateTime
     */
    private $accessTime;

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