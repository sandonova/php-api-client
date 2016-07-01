<?php
namespace Emis\Entity\Api\Document;

class DocumentSearch
{
    /**
     * @var int[]
     */
    private $ids = array();

    /**
     * @return int[]
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * @param int[]
     * @return DocumentSearch
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
        return $this;
    }
}
