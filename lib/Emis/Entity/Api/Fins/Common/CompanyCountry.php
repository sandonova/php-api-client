<?php

namespace Emis\Entity\Api\Fins\Common;

/**
 * Description of CompanyCountry
 *
 * @author dsales
 */
class CompanyCountry
{
    /**
     * @var string
     */
    private $isicList = null;

    /**
     * @var string
     */
    private $countryCode = null;

    /**
     * @return string
     */
    public function getIsicList()
    {
        return $this->isicList;
    }

    /**
     * @param int $isicList
     * @return CompanyCountry
     */
    public function setIsicList($isicList)
    {
        $this->isicList = $isicList;
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
     * @return CompanyCountry
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}
