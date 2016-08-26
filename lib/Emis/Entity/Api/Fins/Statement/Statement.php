<?php

namespace Emis\Entity\Api\Fins\Statement;

/**
 * Description of Statement
 *
 * @author dsales
 */
class Statement extends BasicStatement
{
    /**
     * @var string
     */
    private $stmtCode = null;

    /**
     * @var int
     */
    private $originalStandardCode = null;

    /**
     * @var int
     */
    private $outputStandardCode = null;

    /**
     * @var string
     */
    private $countryCode = null;

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
    private $originalCurrency = null;

    /**
     * @var string
     */
    private $displayCurrency = null;

    /**
     * @var int
     */
    private $multiple = null;

    /**
     * @var string
     */
    private $auditedStatus = null;

    /**
     * @var StatementAccount[]
     */
    private $accountList = array();

    /**
     * @serializable false
     * @var string
     */
    private $pubCode = null;

    /**
    * @return string
    */
    public function getStmtCode()
    {
        return $this->stmtCode;
    }

    /**
    * @param string $stmtCode
    * @return Statement
    */
    public function setStmtCode($stmtCode)
    {
        $this->stmtCode = $stmtCode;
        return $this;
    }

    /**
    * @return int
    */
    public function getOriginalStandardCode()
    {
        return $this->originalStandardCode;
    }

    /**
    * @param int $originalStandardCode
    * @return Statement
    */
    public function setOriginalStandardCode($originalStandardCode)
    {
        $this->originalStandardCode = $originalStandardCode;
        return $this;
    }

    /**
    * @return int
    */
    public function getOutputStandardCode()
    {
        return $this->outputStandardCode;
    }

    /**
    * @param int $outputStandardCode
    * @return Statement
    */
    public function setOutputStandardCode($outputStandardCode)
    {
        $this->outputStandardCode = $outputStandardCode;
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
    * @return Statement
    */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
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
    * @return Statement
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
    * @return Statement
    */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
    * @return string
    */
    public function getOriginalCurrency()
    {
        return $this->originalCurrency;
    }

    /**
    * @param string $originalCurrency
    * @return Statement
    */
    public function setOriginalCurrency($originalCurrency)
    {
        $this->originalCurrency = $originalCurrency;
        return $this;
    }

    /**
    * @return string
    */
    public function getDisplayCurrency()
    {
        return $this->displayCurrency;
    }

    /**
    * @param string $displayCurrency
    * @return Statement
    */
    public function setDisplayCurrency($displayCurrency)
    {
        $this->displayCurrency = $displayCurrency;
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
    * @return Statement
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
    * @return Statement
    */
    public function setAuditedStatus($auditedStatus)
    {
        $this->auditedStatus = $auditedStatus;
        return $this;
    }

    /**
    * @return StatementAccount[]
    */
    public function getAccountList()
    {
        return $this->accountList;
    }

    /**
    * @param StatementAccount[] $accountList
    * @return Statement
    */
    public function setAccountList($accountList)
    {
        $this->accountList = $accountList;
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
