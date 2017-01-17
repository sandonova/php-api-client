<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of CompanyRating
 *
 * @author dsales
 */
class CompanyRating
{
    /**
     * @serializable false 
     * @var string isic+sequence
     */
    private $ratingId = null;

    /**
     * @var Date
     * financials->COMPANY_RATING_LIST->RATING_DATE
     */
    private $ratingDate = null;

    /**
     * @var string
     * financials->COMPANY_RATING_LIST->AGENCY_NAME
     */
    private $ratingAgencyName = null;

    /**
     * @var number
     * financials->COMPANY_RATING_LIST->RATING_VALUE
     */
    private $ratingValue = null;

    /**
    * @return string isic+sequence
    */    
    public function getRatingId() 
    {
        return $this->ratingId;
    }

    /**
    * @param string isic+sequence $ratingId
    * @return CompanyRating 
    */
    public function setRatingId($ratingId)
    {
        $this->ratingId = $ratingId;
        return $this;
    }

    /**
    * @return Date
    */    
    public function getRatingDate() 
    {
        return $this->ratingDate;
    }

    /**
    * @param Date $ratingDate
    * @return CompanyRating 
    */
    public function setRatingDate($ratingDate)
    {
        $this->ratingDate = $ratingDate;
        return $this;
    }

    /**
    * @return string
    */    
    public function getRatingAgencyName() 
    {
        return $this->ratingAgencyName;
    }

    /**
    * @param string $ratingAgencyName
    * @return CompanyRating 
    */
    public function setRatingAgencyName($ratingAgencyName)
    {
        $this->ratingAgencyName = $ratingAgencyName;
        return $this;
    }

    /**
    * @return number
    */    
    public function getRatingValue() 
    {
        return $this->ratingValue;
    }

    /**
    * @param number $ratingValue
    * @return CompanyRating 
    */
    public function setRatingValue($ratingValue)
    {
        $this->ratingValue = $ratingValue;
        return $this;
    }

}
