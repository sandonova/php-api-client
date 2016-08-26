<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of CompanyDividend
 *
 * @author dsales
 */
class CompanyDividend
{
    /**
     * @serializable false 
     * @var string isic+sequence
     */
    private $dividendId = null;

    /**
     * @var Date
     * financials->DIVIDENDS->PAY_DATE
     */
    private $dividendPayDate = null;

    /**
     * @var string
     * financials->DIVIDENDS->CURRENCY
     */
    private $dividendCurrency = null;

    /**
     * @var string
     * financials->DIVIDENDS->DIVIDEND_TYPE
     */
    private $dividendType = null;

    /**
     * @var number
     * financials->DIVIDENDS->AMOUNT
     */
    private $dividendValue = null;

    /**
    * @return string isic+sequence
    */    
    public function getDividendId() 
    {
        return $this->dividendId;
    }

    /**
    * @param string isic+sequence $dividendId
    * @return CompanyDividend 
    */
    public function setDividendId($dividendId)
    {
        $this->dividendId = $dividendId;
        return $this;
    }

    /**
    * @return Date
    */    
    public function getDividendPayDate() 
    {
        return $this->dividendPayDate;
    }

    /**
    * @param Date $dividendPayDate
    * @return CompanyDividend 
    */
    public function setDividendPayDate($dividendPayDate)
    {
        $this->dividendPayDate = $dividendPayDate;
        return $this;
    }

    /**
    * @return string
    */    
    public function getDividendCurrency() 
    {
        return $this->dividendCurrency;
    }

    /**
    * @param string $dividendCurrency
    * @return CompanyDividend 
    */
    public function setDividendCurrency($dividendCurrency)
    {
        $this->dividendCurrency = $dividendCurrency;
        return $this;
    }

    /**
    * @return string
    */    
    public function getDividendType() 
    {
        return $this->dividendType;
    }

    /**
    * @param string $dividendType
    * @return CompanyDividend 
    */
    public function setDividendType($dividendType)
    {
        $this->dividendType = $dividendType;
        return $this;
    }

    /**
    * @return number
    */    
    public function getDividendValue() 
    {
        return $this->dividendValue;
    }

    /**
    * @param number $dividendValue
    * @return CompanyDividend 
    */
    public function setDividendValue($dividendValue)
    {
        $this->dividendValue = $dividendValue;
        return $this;
    }

}
