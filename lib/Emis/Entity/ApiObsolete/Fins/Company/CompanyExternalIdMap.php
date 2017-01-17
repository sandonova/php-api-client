<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of CompanyExternalIdMap
 *
 * @author dsales
 */
class CompanyExternalIdMap
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
     * @var Emis\Company\Api\Entity\CompanyExternalId[];
     * business->EXTERNAL_COMPANY_ID_LIST
     */
    private $externalIdList = array();

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
     * @return Emis\Company\Api\Entity\CompanyExternalId[];
     */
    public function getExternalIdList()
    {
        return $this->externalIdList;
    }

    /**
     * @param Emis\Company\Api\Entity\CompanyExternalId[];
     * @return Company
     */
    public function setExternalIdList($externalIdList)
    {
        $this->externalIdList = $externalIdList;
        return $this;
    }

    /**
     * @param Emis\Company\Api\Entity\CompanyExternalId[];
     * @return Company
     */
    public function addtExternalIdList($externalIdList)
    {
        if ($this->externalIdList == null) {
            $this->externalIdList = array();
        }

        $this->externalIdList[] = $externalIdList;
        return $this;
    }
}
