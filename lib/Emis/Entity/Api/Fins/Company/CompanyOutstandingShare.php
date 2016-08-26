<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of CompanyOutstandingShare
 *
 * @author dsales
 */
class CompanyOutstandingShare
{
    /**
     * @serializable false 
     * @var string isic+sequence
     */
    private $outstandingShareId = null;

    /**
     * @var Date
     * financials->OUTSTANDING_SHARES_LIST->REFERENCE_DATE
     */
    private $outstandingShareDate = null;

    /**
     * @var string
     * financials->OUTSTANDING_SHARES_LIST->SHARE_SERIES
     */
    private $outstandingShareSeriesName = null;

    /**
     * @var number
     * financials->OUTSTANDING_SHARES_LIST->AMOUNT
     */
    private $outstandingShareValue = null;

    /**
    * @return string isic+sequence
    */    
    public function getOutstandingShareId() 
    {
        return $this->outstandingShareId;
    }

    /**
    * @param string isic+sequence $outstandingShareId
    * @return CompanyOutstandingShare 
    */
    public function setOutstandingShareId($outstandingShareId)
    {
        $this->outstandingShareId = $outstandingShareId;
        return $this;
    }

    /**
    * @return Date
    */    
    public function getOutstandingShareDate() 
    {
        return $this->outstandingShareDate;
    }

    /**
    * @param Date $outstandingShareDate
    * @return CompanyOutstandingShare 
    */
    public function setOutstandingShareDate($outstandingShareDate)
    {
        $this->outstandingShareDate = $outstandingShareDate;
        return $this;
    }

    /**
    * @return string
    */    
    public function getOutstandingShareSeriesName() 
    {
        return $this->outstandingShareSeriesName;
    }

    /**
    * @param string $outstandingShareSeriesName
    * @return CompanyOutstandingShare 
    */
    public function setOutstandingShareSeriesName($outstandingShareSeriesName)
    {
        $this->outstandingShareSeriesName = $outstandingShareSeriesName;
        return $this;
    }

    /**
    * @return number
    */    
    public function getOutstandingShareValue() 
    {
        return $this->outstandingShareValue;
    }

    /**
    * @param number $outstandingShareValue
    * @return CompanyOutstandingShare 
    */
    public function setOutstandingShareValue($outstandingShareValue)
    {
        $this->outstandingShareValue = $outstandingShareValue;
        return $this;
    }

}
