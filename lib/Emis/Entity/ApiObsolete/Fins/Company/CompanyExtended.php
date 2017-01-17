<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of CompanyExtended
 *
 * @author dsales
 */
class CompanyExtended extends Company 
{
    /**
     * @var string
     * header_ENGLISH->COMPANY->OPERATIONAL_STATUS
     */
    private $status = null;

    /**
     * @var string
     * header_ENGLISH->COMPANY->DISPLAY_NAME
     */
    private $displayName = null;

    /**
     * @var string
     * header_LOCAL->COMPANY->DISPLAY_NAME
     */
    private $displayNameLocal = null;

    /**
     * @var Emis\Entity\Api\Fins\Company\CompanyPreviousName[]
     * basics_LOCAL->COMPANY_PREVIOUS_NAME_LIST
     */
    private $previousNameList = null;

    /**
     * @var string
     * header_ENGLISH->COMPANY->COMPANY_TYPE
     */
    private $companyType = null;

    /**
     * @var string
     * header_ENGLISH->COMPANY->LEGAL_FORM
     */
    private $legalForm = null;

    /**
     * @var string
     * header_ENGLISH->COMPANY->LEGAL_FORM_LABEL
     */
    private $globalLegalForm = null;

    /**
     * @var int
     * header_ENGLISH->COMPANY->INCORPORATION_YEAR
     * header_ENGLISH->COMPANY->INCORPORATION_DATE
     */
    private $incorporationYear = null;

    /**
     * @var Emis\Entity\Api\Fins\Company\CompanyAddress
     * basics_ENGLISH->ADDRESS_LIST
     * basics_LOCAL->ADDRESS_LIST
     */
    private $address = null;

    /**
     * @var Emis\Entity\Api\Fins\Company\CompanySegment[]
     * financials->COMPANY_SEGMENT_LIST
     */
    private $segmentList = null;

    /**
     * @var Emis\Entity\Api\Fins\Company\CompanyOwner[]
     * ownership_ENGLISH->COMPANY_OWNER_LIST
     * ownership_LOCAL->COMPANY_OWNER_LIST
     */
    private $ownerList = array();

    /**
     * @var Emis\Entity\Api\Fins\Company\CompanyAffiliate[]
     * ownership_ENGLISH->RELATED_COMPANY_LIST
     * ownership_LOCAL->RELATED_COMPANY_LIST
     */
    private $affiliateList = array();

    /**
     * @var Emis\Entity\Api\Fins\Company\CompanyExecutive[]
     * basics_ENGLISH->EXECUTIVE_LIST
     * basics_LOCAL->EXECUTIVE_LIST
     */
    private $executiveList = array();

    /**
     * @var string
     * basics_ENGLISH->BUSINESS_ACTIVITY->DESCRIPTION
     */
    private $description = null;

    /**
     * @var string
     * basics_LOCAL->BUSINESS_ACTIVITY->DESCRIPTION
     */
    private $descriptionLocal = null;

    /**
     * @var string
     * basics_ENGLISH->BUSINESS_ACTIVITY->MAIN_PRODUCTS
     */
    private $mainProducts = null;

    /**
     * @var string
     * basics_LOCAL->BUSINESS_ACTIVITY->MAIN_PRODUCTS
     */
    private $mainProductsLocal = null;

    /**
     * @var array
     * business->COMPANY_NAICS_LIST
     */
    private $secondaryActivityList = array();

    /**
     * @var Date
     * basics_ENGLISH->FINANCIAL_AUDITOR->REFERENCE_DATE
     */
    private $auditorDate = null;

    /**
     * @var string
     * basics_ENGLISH->FINANCIAL_AUDITOR->AUDITOR_NAME
     */
    private $auditorName = null;

    /**
     * @var Date
     * business->EMPLOYEES_NUMBER->REFERENCE_DATE
     */
    private $employeeNumberDate = null;

    /**
     * @var int
     * business->EMPLOYEES_NUMBER->EXACT_NUMBER
     */
    private $employeeNumber = null;

    /**
     * @var Date
     * business->REGISTERED_CAPITAL->REFERENCE_DATE
     */
    private $registeredCapitalDate = null;

    /**
     * @var string
     * business->REGISTERED_CAPITAL->CURRENCY_CODE
     */
    private $registeredCapitalCurrency = null;

    /**
     * @var number
     * business->REGISTERED_CAPITAL->AMOUNT
     */
    private $registeredCapitalValue = null;

    /**
     * @var Emis\Entity\Api\Fins\Company\CompanyOutstandingShare[]
     * financials->OUTSTANDING_SHARES_LIST
     */
    private $outstandingSharesList = null;

    /**
     * @var Emis\Entity\Api\Fins\Company\CompanyDividend[]
     * financials->DIVIDENDS
     */
    private $dividendList = null;

    /**
     * @var Emis\Entity\Api\Fins\Company\CompanyRating[]
     */
    private $ratingList = null;

    /**
     * @var number
     * business->LATEST_ANNUAL_MARKET_CAP
     */
    private $latestMarketCapitalization = null;

    /**
     * @var string
     * business->LATEST_MARKET_CAP_CURRENCY
     */
    private $latestMarketCapitalizationCurrency = null;

    /**
    * @return string
    */    
    public function getStatus() 
    {
        return $this->status;
    }

    /**
    * @param string $status
    * @return CompanyExtended 
    */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
    * @return string
    */    
    public function getDisplayName() 
    {
        return $this->displayName;
    }

    /**
    * @param string $displayName
    * @return CompanyExtended 
    */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
    * @return string
    */    
    public function getDisplayNameLocal() 
    {
        return $this->displayNameLocal;
    }

    /**
    * @param string $displayNameLocal
    * @return CompanyExtended 
    */
    public function setDisplayNameLocal($displayNameLocal)
    {
        $this->displayNameLocal = $displayNameLocal;
        return $this;
    }

    /**
    * @return Emis\Entity\Api\Fins\Company\CompanyPreviousName[]
    */    
    public function getPreviousNameList() 
    {
        return $this->previousNameList;
    }

    /**
    * @param Emis\Entity\Api\Fins\Company\CompanyPreviousName $previousNameList
    * @return CompanyExtended 
    */
    public function setPreviousNameList($previousNameList)
    {
        $this->previousNameList = $previousNameList;
        return $this;
    }

    /**
    * @return string
    */    
    public function getCompanyType() 
    {
        return $this->companyType;
    }

    /**
    * @param string $companyType
    * @return CompanyExtended 
    */
    public function setCompanyType($companyType)
    {
        $this->companyType = $companyType;
        return $this;
    }

    /**
    * @return string
    */    
    public function getLegalForm() 
    {
        return $this->legalForm;
    }

    /**
    * @param string $legalForm
    * @return CompanyExtended 
    */
    public function setLegalForm($legalForm)
    {
        $this->legalForm = $legalForm;
        return $this;
    }

    /**
    * @return string
    */    
    public function getGlobalLegalForm() 
    {
        return $this->globalLegalForm;
    }

    /**
    * @param string $globalLegalForm
    * @return CompanyExtended 
    */
    public function setGlobalLegalForm($globalLegalForm)
    {
        $this->globalLegalForm = $globalLegalForm;
        return $this;
    }

    /**
    * @return int
    */    
    public function getIncorporationYear() 
    {
        return $this->incorporationYear;
    }

    /**
    * @param int $incorporationYear
    * @return CompanyExtended 
    */
    public function setIncorporationYear($incorporationYear)
    {
        $this->incorporationYear = $incorporationYear;
        return $this;
    }

    /**
    * @return Emis\Entity\Api\Fins\Company\CompanyAddress
    */    
    public function getAddress() 
    {
        return $this->address;
    }

    /**
    * @param Emis\Entity\Api\Fins\Company\CompanyAddress $address
    * @return CompanyExtended 
    */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
    * @return Emis\Entity\Api\Fins\Company\CompanySegment[]
    */    
    public function getSegmentList() 
    {
        return $this->segmentList;
    }

    /**
    * @param Emis\Entity\Api\Fins\Company\CompanySegment $segmentList
    * @return CompanyExtended 
    */
    public function setSegmentList($segmentList)
    {
        $this->segmentList = $segmentList;
        return $this;
    }

    /**
    * @return Emis\Entity\Api\Fins\Company\CompanyOwner[]
    */    
    public function getOwnerList() 
    {
        return $this->ownerList;
    }

    /**
    * @param Emis\Entity\Api\Fins\Company\CompanyOwner[] $ownerList
    * @return CompanyExtended 
    */
    public function setOwnerList($ownerList)
    {
        $this->ownerList = $ownerList;
        return $this;
    }

    /**
    * @return Emis\Entity\Api\Fins\Company\CompanyAffiliate[]
    */    
    public function getAffiliateList() 
    {
        return $this->affiliateList;
    }

    /**
    * @param Emis\Entity\Api\Fins\Company\CompanyAffiliate[] $affiliateList
    * @return CompanyExtended 
    */
    public function setAffiliateList($affiliateList)
    {
        $this->affiliateList = $affiliateList;
        return $this;
    }

    /**
    * @return Emis\Entity\Api\Fins\Company\CompanyExecutive[]
    */    
    public function getExecutiveList() 
    {
        return $this->executiveList;
    }

    /**
    * @param Emis\Entity\Api\Fins\Company\CompanyExecutive[] $executiveList
    * @return CompanyExtended 
    */
    public function setExecutiveList($executiveList)
    {
        $this->executiveList = $executiveList;
        return $this;
    }

    /**
    * @return string
    */    
    public function getDescription() 
    {
        return $this->description;
    }

    /**
    * @param string $description
    * @return CompanyExtended 
    */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
    * @return string
    */    
    public function getDescriptionLocal() 
    {
        return $this->descriptionLocal;
    }

    /**
    * @param string $descriptionLocal
    * @return CompanyExtended 
    */
    public function setDescriptionLocal($descriptionLocal)
    {
        $this->descriptionLocal = $descriptionLocal;
        return $this;
    }

    /**
    * @return string
    */    
    public function getMainProducts() 
    {
        return $this->mainProducts;
    }

    /**
    * @param string $mainProducts
    * @return CompanyExtended 
    */
    public function setMainProducts($mainProducts)
    {
        $this->mainProducts = $mainProducts;
        return $this;
    }

    /**
    * @return string
    */    
    public function getMainProductsLocal() 
    {
        return $this->mainProductsLocal;
    }

    /**
    * @param string $mainProductsLocal
    * @return CompanyExtended 
    */
    public function setMainProductsLocal($mainProductsLocal)
    {
        $this->mainProductsLocal = $mainProductsLocal;
        return $this;
    }

    /**
    * @return array
    */    
    public function getSecondaryActivityList() 
    {
        return $this->secondaryActivityList;
    }

    /**
    * @param array $secondaryActivityList
    * @return CompanyExtended 
    */
    public function setSecondaryActivityList($secondaryActivityList)
    {
        $this->secondaryActivityList = $secondaryActivityList;
        return $this;
    }

    /**
    * @return Date
    */    
    public function getAuditorDate() 
    {
        return $this->auditorDate;
    }

    /**
    * @param Date $auditorDate
    * @return CompanyExtended 
    */
    public function setAuditorDate($auditorDate)
    {
        $this->auditorDate = $auditorDate;
        return $this;
    }

    /**
    * @return string
    */    
    public function getAuditorName() 
    {
        return $this->auditorName;
    }

    /**
    * @param string $auditorName
    * @return CompanyExtended 
    */
    public function setAuditorName($auditorName)
    {
        $this->auditorName = $auditorName;
        return $this;
    }

    /**
    * @return Date
    */    
    public function getEmployeeNumberDate() 
    {
        return $this->employeeNumberDate;
    }

    /**
    * @param Date $employeeNumberDate
    * @return CompanyExtended 
    */
    public function setEmployeeNumberDate($employeeNumberDate)
    {
        $this->employeeNumberDate = $employeeNumberDate;
        return $this;
    }

    /**
    * @return int
    */    
    public function getEmployeeNumber() 
    {
        return $this->employeeNumber;
    }

    /**
    * @param int $employeeNumber
    * @return CompanyExtended 
    */
    public function setEmployeeNumber($employeeNumber)
    {
        $this->employeeNumber = $employeeNumber;
        return $this;
    }

    /**
    * @return Date
    */    
    public function getRegisteredCapitalDate() 
    {
        return $this->registeredCapitalDate;
    }

    /**
    * @param Date $registeredCapitalDate
    * @return CompanyExtended 
    */
    public function setRegisteredCapitalDate($registeredCapitalDate)
    {
        $this->registeredCapitalDate = $registeredCapitalDate;
        return $this;
    }

    /**
    * @return string
    */    
    public function getRegisteredCapitalCurrency() 
    {
        return $this->registeredCapitalCurrency;
    }

    /**
    * @param string $registeredCapitalCurrency
    * @return CompanyExtended 
    */
    public function setRegisteredCapitalCurrency($registeredCapitalCurrency)
    {
        $this->registeredCapitalCurrency = $registeredCapitalCurrency;
        return $this;
    }

    /**
    * @return number
    */    
    public function getRegisteredCapitalValue() 
    {
        return $this->registeredCapitalValue;
    }

    /**
    * @param number $registeredCapitalValue
    * @return CompanyExtended 
    */
    public function setRegisteredCapitalValue($registeredCapitalValue)
    {
        $this->registeredCapitalValue = $registeredCapitalValue;
        return $this;
    }

    /**
    * @return Emis\Entity\Api\Fins\Company\CompanyOutstandingShare[]
    */    
    public function getOutstandingSharesList() 
    {
        return $this->outstandingSharesList;
    }

    /**
    * @param Emis\Entity\Api\Fins\Company\CompanyOutstandingShare $outstandingSharesList
    * @return CompanyExtended 
    */
    public function setOutstandingSharesList($outstandingSharesList)
    {
        $this->outstandingSharesList = $outstandingSharesList;
        return $this;
    }

    /**
    * @return Emis\Entity\Api\Fins\Company\CompanyDividend[]
    */    
    public function getDividendList() 
    {
        return $this->dividendList;
    }

    /**
    * @param Emis\Entity\Api\Fins\Company\CompanyDividend $dividendList
    * @return CompanyExtended 
    */
    public function setDividendList($dividendList)
    {
        $this->dividendList = $dividendList;
        return $this;
    }

    /**
    * @return Emis\Entity\Api\Fins\Company\CompanyRating[]
    */    
    public function getRatingList() 
    {
        return $this->ratingList;
    }

    /**
    * @param Emis\Entity\Api\Fins\Company\CompanyRating $ratingList
    * @return CompanyExtended 
    */
    public function setRatingList($ratingList)
    {
        $this->ratingList = $ratingList;
        return $this;
    }

    /**
    * @return number
    */    
    public function getLatestMarketCapitalization() 
    {
        return $this->latestMarketCapitalization;
    }

    /**
    * @param number $latestMarketCapitalization
    * @return CompanyExtended 
    */
    public function setLatestMarketCapitalization($latestMarketCapitalization)
    {
        $this->latestMarketCapitalization = $latestMarketCapitalization;
        return $this;
    }

    /**
    * @return string
    */    
    public function getLatestMarketCapitalizationCurrency() 
    {
        return $this->latestMarketCapitalizationCurrency;
    }

    /**
    * @param string $latestMarketCapitalizationCurrency
    * @return CompanyExtended 
    */
    public function setLatestMarketCapitalizationCurrency($latestMarketCapitalizationCurrency)
    {
        $this->latestMarketCapitalizationCurrency = $latestMarketCapitalizationCurrency;
        return $this;
    }
}
