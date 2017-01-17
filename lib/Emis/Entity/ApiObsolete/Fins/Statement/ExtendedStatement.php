<?php

namespace Emis\Entity\Api\Fins\Statement;

/**
 * Description of ExtendedStatement
 *
 * @author dsales
 */
class ExtendedStatement extends BasicStatement
{
    /**
     * @var int
     */
    private $standardCode = null;

    /**
     * @var string
     */
    private $countryCode = null;

    /**
     * @var string
     */
    private $companyName = null;

    /**
     * @var Date
     */
    private $beginDate = null;

    /**
     * @var Date
     */
    private $endDate = null;

    /**
     * @var string
     */
    private $currency = null;

    /**
     * @var int
     */
    private $multiple = null;

    /**
     * @var string
     */
    private $auditedStatus = null;

    /**
     * @var array
     */
    private $mainActivityList = null;

    /**
     * @var array
     */
    private $externalIdList = null;

    /**
    * @return int
    */
    public function getStandardCode()
    {
        return $this->standardCode;
    }

    /**
    * @param int $standardCode
    * @return ExtendedStatement
    */
    public function setStandardCode($standardCode)
    {
        $this->standardCode = $standardCode;
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
    * @return ExtendedStatement
    */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
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
    * @return ExtendedStatement
    */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
    * @return Date
    */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
    * @param Date $beginDate
    * @return ExtendedStatement
    */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;
        return $this;
    }

    /**
    * @return Date
    */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
    * @param Date $endDate
    * @return ExtendedStatement
    */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
    * @return string
    */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
    * @param string $currency
    * @return ExtendedStatement
    */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
    * @return int
    */
    public function getMultiple()
    {
        return $this->multiple;
    }

    /**
    * @param int $multiple
    * @return ExtendedStatement
    */
    public function setMultiple($multiple)
    {
        $this->multiple = $multiple;
        return $this;
    }

    /**
    * @return string
    */
    public function getAuditedStatus()
    {
        return $this->auditedStatus;
    }

    /**
    * @param string $auditedStatus
    * @return ExtendedStatement
    */
    public function setAuditedStatus($auditedStatus)
    {
        $this->auditedStatus = $auditedStatus;
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
    * @return ExtendedStatement
    */
    public function setMainActivityList($mainActivityList)
    {
        $this->mainActivityList = $mainActivityList;
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
    * @return ExtendedStatement
    */
    public function setExternalIdList($externalIdList)
    {
        $this->externalIdList = $externalIdList;
        return $this;
    }
}
