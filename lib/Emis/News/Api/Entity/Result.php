<?php
namespace Emis\News\Api\Entity;

class Result
{
    /**
     * @var int
     */
    private $total = 0;

    /**
     * @var int
     */
    private $duplicates = 0;

    /**
     * @var int
     */
    private $results = 0;

    /**
     * @var \Emis\News\Api\Entity\Search
     */
    private $search;

    /**
     * @var \Emis\News\Api\Entity\Document[]
     */
    private $documents;

    /**
     * @return ISearch
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param ISearch $search
     * @return Result
     */
    public function setSearch($search)
    {
        $this->search = $search;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return (int)$this->total;
    }

    /**
     * @param int $total
     * @return Result
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuplicates()
    {
        return $this->duplicates;
    }

    /**
     * @param int $duplicates
     * @return Result
     */
    public function setDuplicates($duplicates)
    {
        $this->duplicates = $duplicates;
        return $this;
    }

    public function getResults()
    {
        return count($this->getDocuments());
    }

    public function setResults()
    {
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
     * @return Result
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;

        return $this;
    }
}