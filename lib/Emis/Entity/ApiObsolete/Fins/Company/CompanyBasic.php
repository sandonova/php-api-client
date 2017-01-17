<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of CompanyBasic
 *
 * @author dsales
 */
class CompanyBasic
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
     * @var date
     */
    private $profileUpdateDate = null;

    /**
     * @return int
     */
    public function getIsic()
    {
        return $this->isic;
    }

    /**
     * @param int $isic
     * @return CompanyBasic
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
     * @return CompanyBasic
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
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
}
