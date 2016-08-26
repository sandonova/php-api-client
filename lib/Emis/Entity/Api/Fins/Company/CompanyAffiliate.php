<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of CompanyAffiliate
 *
 * @author dsales
 */
class CompanyAffiliate 
{
    /**
     * @serializable false 
     * @var string isic+sequence
     */
    private $affiliateId = null;

    /**
     * @var string
     * ownership_ENGLISH->COMPANY_OWNER_LIST->OWNERSHIP_TYPE 
     */
    private $affiliateshipType = null;

    /**
     * @var string
     * ownership_ENGLISH->COMPANY_OWNER_LIST->DISPLAY_NAME 
     */
    private $affiliateName = null;

    /**
     * @var string
     * ownership_LOCAL->COMPANY_OWNER_LIST->DISPLAY_NAME 
     */
    private $affiliateNameLocal = null;

    /**
     * @var string
     * ownership_ENGLISH->COMPANY_OWNER_LIST->COUNTRY_CODE
     */
    private $affiliateCountry = null;

    /**
     * @var int
     * ownership_ENGLISH->COMPANY_OWNER_LIST->COMPANY_ID
     */
    private $affiliateIsic = null;

    /**
     * @var number
     * ownership_ENGLISH->COMPANY_OWNER_LIST->PERCENT
     */
    private $affiliateshipPercentage = null;

    /**
     * @var string
     * ownership_ENGLISH->COMPANY_OWNER_LIST->EXTERNAL_ID
     */
    private $affiliateExternalId = null;

    /**
     * @var string
     * ownership_ENGLISH->COMPANY_OWNER_LIST->CLASS_CODE
     */
    private $affiliateExternalIdClass = null;

    /**
    * @return string isic+sequence
    */    
    public function getAffiliateId() 
    {
        return $this->affiliateId;
    }

    /**
    * @param string isic+sequence $affiliateId
    * @return CompanyAffiliate 
    */
    public function setAffiliateId($affiliateId)
    {
        $this->affiliateId = $affiliateId;
        return $this;
    }

    /**
    * @return string
    */    
    public function getAffiliateshipType() 
    {
        return $this->affiliateshipType;
    }

    /**
    * @param string $affiliateshipType
    * @return CompanyAffiliate 
    */
    public function setAffiliateshipType($affiliateshipType)
    {
        $this->affiliateshipType = $affiliateshipType;
        return $this;
    }

    /**
    * @return string
    */    
    public function getAffiliateName() 
    {
        return $this->affiliateName;
    }

    /**
    * @param string $affiliateName
    * @return CompanyAffiliate 
    */
    public function setAffiliateName($affiliateName)
    {
        $this->affiliateName = $affiliateName;
        return $this;
    }

    /**
    * @return string
    */    
    public function getAffiliateNameLocal() 
    {
        return $this->affiliateNameLocal;
    }

    /**
    * @param string $affiliateNameLocal
    * @return CompanyAffiliate 
    */
    public function setAffiliateNameLocal($affiliateNameLocal)
    {
        $this->affiliateNameLocal = $affiliateNameLocal;
        return $this;
    }

    /**
    * @return string
    */    
    public function getAffiliateCountry() 
    {
        return $this->affiliateCountry;
    }

    /**
    * @param string $affiliateCountry
    * @return CompanyAffiliate 
    */
    public function setAffiliateCountry($affiliateCountry)
    {
        $this->affiliateCountry = $affiliateCountry;
        return $this;
    }

    /**
    * @return int
    */    
    public function getAffiliateIsic() 
    {
        return $this->affiliateIsic;
    }

    /**
    * @param int $affiliateIsic
    * @return CompanyAffiliate 
    */
    public function setAffiliateIsic($affiliateIsic)
    {
        $this->affiliateIsic = $affiliateIsic;
        return $this;
    }

    /**
    * @return number
    */    
    public function getAffiliateshipPercentage() 
    {
        return $this->affiliateshipPercentage;
    }

    /**
    * @param number $affiliateshipPercentage
    * @return CompanyAffiliate 
    */
    public function setAffiliateshipPercentage($affiliateshipPercentage)
    {
        $this->affiliateshipPercentage = $affiliateshipPercentage;
        return $this;
    }

    /**
    * @return string
    */    
    public function getAffiliateExternalId() 
    {
        return $this->affiliateExternalId;
    }

    /**
    * @param string $affiliateExternalId
    * @return CompanyAffiliate 
    */
    public function setAffiliateExternalId($affiliateExternalId)
    {
        $this->affiliateExternalId = $affiliateExternalId;
        return $this;
    }

    /**
    * @return string
    */    
    public function getAffiliateExternalIdClass() 
    {
        return $this->affiliateExternalIdClass;
    }

    /**
    * @param string $affiliateExternalIdClass
    * @return CompanyAffiliate 
    */
    public function setAffiliateExternalIdClass($affiliateExternalIdClass)
    {
        $this->affiliateExternalIdClass = $affiliateExternalIdClass;
        return $this;
    }
}
