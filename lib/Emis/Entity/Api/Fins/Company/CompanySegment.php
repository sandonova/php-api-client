<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of CompanySegment
 *
 * @author dsales
 */
class CompanySegment
{
    /**
     * @serializable false 
     * @var string isic+sequence
     */
    private $segmentId = null;

    /**
     * @var string
     * financials->COMPANY_SEGMENT_LIST->STOCK_NAME
     */
    private $segmentStockName = null;

    /**
     * @var string
     * financials->COMPANY_SEGMENT_LIST->SEGMENT_NAME
     */
    private $segmentName = null;

    /**
     * @var string
     * financials->COMPANY_SEGMENT_LIST->STOCK_EXCHANGE_ID
     */
    private $segmentStockExchangeId = null;

    /**
    * @return string isic+sequence
    */    
    public function getSegmentId() 
    {
        return $this->segmentId;
    }

    /**
    * @param string isic+sequence $segmentId
    * @return CompanySegment 
    */
    public function setSegmentId($segmentId)
    {
        $this->segmentId = $segmentId;
        return $this;
    }

    /**
    * @return string
    */    
    public function getSegmentStockName() 
    {
        return $this->segmentStockName;
    }

    /**
    * @param string $segmentStockName
    * @return CompanySegment 
    */
    public function setSegmentStockName($segmentStockName)
    {
        $this->segmentStockName = $segmentStockName;
        return $this;
    }

    /**
    * @return string
    */    
    public function getSegmentName() 
    {
        return $this->segmentName;
    }

    /**
    * @param string $segmentName
    * @return CompanySegment 
    */
    public function setSegmentName($segmentName)
    {
        $this->segmentName = $segmentName;
        return $this;
    }

    /**
    * @return string
    */    
    public function getSegmentStockExchangeId() 
    {
        return $this->segmentStockExchangeId;
    }

    /**
    * @param string $segmentStockExchangeId
    * @return CompanySegment 
    */
    public function setSegmentStockExchangeId($segmentStockExchangeId)
    {
        $this->segmentStockExchangeId = $segmentStockExchangeId;
        return $this;
    }

}
