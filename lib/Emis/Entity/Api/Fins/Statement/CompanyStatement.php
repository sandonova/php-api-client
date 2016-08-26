<?php

namespace Emis\Entity\Api\Fins\Statement;

use Emis\Entity\Api\Fins\Company\Company;

/**
 * Description of CompanyStatement
 *
 * @author dsales
 */
class CompanyStatement
{
    /**
     * @var int
     */
    private $isic = null;

    /**
     * @var string
     */
    private $countryCode = null;

    /**
     * @var string
     */
    private $companyName = null;

    /**
     * @var array
     */
    private $stmtUpdateList = null;

    /**
     * @return int
     */
    public function getIsic()
    {
        return $this->isic;
    }

    /**
     * @param int $isic
     * @return CompanyStatement
     */
    public function setIsic($isic)
    {
        $this->isic = $isic;
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
     * @return CompanyStatement
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
     * @return CompanyStatement
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
    * @return array
    */
    public function getStmtUpdateList()
    {
        return $this->stmtUpdateList;
    }

    /**
    * @param array $stmtUpdateList
    * @return CompanyStatement
    */
    public function setStmtUpdateList($stmtUpdateList)
    {
        $this->stmtUpdateList = $stmtUpdateList;
        return $this;
    }
}
