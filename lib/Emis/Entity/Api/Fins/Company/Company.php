<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of Company
 *
 * @author dsales
 */
class Company
{
    /**
     * @var int
     */
    private $isic = null;

    /**
     * @var array
     * business->EXTERNAL_COMPANY_ID_LIST
     */
    private $externalIdList = array();

    /**
     * @var string
     * header_ENGLISH->COMPANY->COMP_NAME_ENG
     */
    private $companyName = null;

    /**
     * @var string
     * header_ENGLISH->COMPANY->COMP_NAME
     */
    private $companyLocalName = null;

    /**
     * @var number
     * business->LATEST_USD_REVENUE
     */
    private $companySizeRevenue = null;

    /**
     * @var int
     * business->LATEST_USD_REVENUE_YEAR
     */
    private $companySizeYear = null;

    /**
     * @var string
     * header_ENGLISH->COMPANY->COUNTRY_CODE
     */
    private $countryCode = null;

    /**
     * @var array
     * business->COMPANY_NAICS_LIST
     */
    private $mainActivityList = array();

    /**
     * @var date
     * header_ENGLISH->COMPANY->PROFILE_UPDT_DATE
     */
    private $profileUpdateDate = null;

    /**
     * @serializable false
     * @var string
     */
    private $pubCode = null;

    /**
     * @return int
     */
    public function getIsic()
    {
        return $this->isic;
    }

    /**
     * @param int $isic
     * @return Company
     */
    public function setIsic($isic)
    {
        $this->isic = $isic;
        return $this;
    }

    /**
     * @return array
     */
    public function getExternalIdList()
    {
        return $this->externalIdList;
    }

    /**
     * @param array $externalIdList
     * @return Company
     */
    public function setExternalIdList($externalIdList)
    {
        $this->externalIdList = $externalIdList;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return Company
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyLocalName()
    {
        return $this->companyLocalName;
    }

    /**
     * @param string $companyLocalName
     * @return Company
     */
    public function setCompanyLocalName($companyLocalName)
    {
        $this->companyLocalName = $companyLocalName;
        return $this;
    }

    /**
     * @return number
     */
    public function getCompanySizeRevenue()
    {
        return $this->companySizeRevenue;
    }

    /**
     * @param number $companySizeRevenue
     * @return Company
     */
    public function setCompanySizeRevenue($companySizeRevenue)
    {
        $this->companySizeRevenue = $companySizeRevenue;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanySizeYear()
    {
        return $this->companySizeYear;
    }

    /**
     * @param int $companySizeYear
     * @return Company
     */
    public function setCompanySizeYear($companySizeYear)
    {
        $this->companySizeYear = $companySizeYear;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return Company
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return array
     */
    public function getMainActivityList()
    {
        return $this->mainActivityList;
    }

    /**
     * @param array $mainActivityList
     * @return Company
     */
    public function setMainActivityList($mainActivityList)
    {
        $this->mainActivityList = $mainActivityList;
        return $this;
    }

    /**
     * @return date
     */
    public function getProfileUpdateDate()
    {
        return $this->profileUpdateDate;
    }

    /**
     * @param date $profileUpdateDate
     * @return Company
     */
    public function setProfileUpdateDate($profileUpdateDate)
    {
        $this->profileUpdateDate = $profileUpdateDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPubCode()
    {
        return $this->pubCode;
    }

    /**
     * @param string $pubCode
     * @return Company
     */
    public function setPubCode($pubCode)
    {
        $this->pubCode = $pubCode;
        return $this;
    }
}
