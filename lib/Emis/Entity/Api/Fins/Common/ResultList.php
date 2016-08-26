<?php

namespace Emis\Entity\Api\Fins\Common;

/**
 * Description of ResultList
 *
 * @author dsales
 */
class ResultList
{
    /**
     * @serializable false
     * @var string condition
     */
    private $condition = null;

    /**
     * @var int
     */
    private $total = null;

    /**
     * @var int
     */
    private $offset = null;

    /**
     * @var int
     */
    private $count = null;

    /**
     * @var string
     */
    private $checksum = null;

    /**
     * @var array
     */
    private $resultList = null;

    /**
    * @return string
    */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
    * @param string $condition
    * @return ResultList
    */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
    * @return int
    */
    public function getTotal()
    {
        return $this->total;
    }

    /**
    * @param int $total
    * @return ResultList
    */
    public function setTotal($total)
    {
        $this->total = $total;
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
    * @return ResultList
    */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
    * @return int
    */
    public function getCount()
    {
        if ($this->resultList != null) {
            return count($this->resultList);
        }
        return 0;
    }

    /**
    * @param int $count
    * @return ResultList
    */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
    * @return string
    */
    public function getChecksum()
    {
        if ($this->checksum != null) {
            return $this->checksum;
        } else {
            return md5(serialize($this->resultList)) ;
        }
    }

    /**
    * @param int $checksum
    * @return ResultList
    */
    public function setChecksum($checksum)
    {
        $this->checksum = $checksum;
        return $this;
    }

    /**
    * @return array
    */
    public function getResultList()
    {
        return $this->resultList;
    }

    /**
    * @param array $resultList
    * @return ResultList
    */
    public function setResultList($resultList)
    {
        $this->resultList = $resultList;
        return $this;
    }

    /**
    * @param Object $object
    * @return ResultList
    */
    public function addElement($object)
    {
        if ($this->resultList == null) {
           $this->resultList = array();
        }

        $this->resultList[] = $object;
        return $this;
    }

    /**
     *
     * @param string $number
     * @return Object
     */
    public function getElement( $number){
    	if(array_key_exists($number, $this->resultList)){
    		return $this->resultList[$number];
    	}else{
    		return null;
    	}
    }
}
