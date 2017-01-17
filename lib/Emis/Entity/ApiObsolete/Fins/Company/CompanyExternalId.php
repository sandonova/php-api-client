<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of CompanyExternalId
 *
 * @author dsales
 */
class CompanyExternalId
{
    /**
     * @serializable false
     * @var int isic
     */
    private $isic = null;

    /**
     * @var string
     * business->EXTERNAL_COMPANY_ID_LIST->CLASS_CODE
     */
    private $classCode = null;

    /**
     * @var string
     * financials->EXTERNAL_COMPANY_ID_LIST->EXTERNAL_COMP_ID
     */
    private $externalId = null;

    /**
    * @return int isic
    */
    public function getIsic()
    {
        return $this->isic;
    }

    /**
    * @param int isic $isic
    * @return CompanyExternalId
    */
    public function setIsic($isic)
    {
        $this->isic = $isic;
        return $this;
    }

    /**
    * @return string
    */
    public function getClassCode()
    {
        return $this->classCode;
    }

    /**
    * @param string $classCode
    * @return CompanyExternalId
    */
    public function setClassCode($classCode)
    {
        $this->classCode = $classCode;
        return $this;
    }

    /**
    * @return string
    */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
    * @param string $externalId
    * @return CompanyExternalId
    */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }
}
