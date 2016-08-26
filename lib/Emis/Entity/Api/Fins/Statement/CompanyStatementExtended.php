<?php

namespace Emis\Entity\Api\Fins\Statement;

/**
 * Description of CompanyStatementExtended
 *
 * @author dsales
 */
class CompanyStatementExtended extends CompanyStatement
{
    /**
     * @var array
     */
    private $externalIdList = array();

    /**
     * @var string
     */
    private $companyLocalName = null;

    /**
     * @var number
     */
    private $companySizeRevenue = null;

    /**
     * @var int
     */
    private $companySizeYear = null;

    /**
     * @var array
     */
    private $mainActivityList = array();

    /**
     * @var date
     */
    private $profileUpdateDate = null;

    /**
     * @return array
     */
    public function getExternalIdList()
    {
        return $this->externalIdList;
    }

    /**
     * @param array $externalIdList
     * @return CompanyStatementExtended
     */
    public function setExternalIdList($externalIdList)
    {
        $this->externalIdList = $externalIdList;
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
     * @return CompanyStatementExtended
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
     * @return CompanyStatementExtended
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
     * @return CompanyStatementExtended
     */
    public function setCompanySizeYear($companySizeYear)
    {
        $this->companySizeYear = $companySizeYear;
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
     * @return CompanyStatementExtended
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
     * @return CompanyStatementExtended
     */
    public function setProfileUpdateDate($profileUpdateDate)
    {
        $this->profileUpdateDate = $profileUpdateDate;
        return $this;
    }
}
