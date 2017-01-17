<?php

namespace Emis\Entity\Api\Fins\Common;

/**
 * Description of Country
 *
 * @author dsales
 */
class Country
{
    /**
     * @var string
     */
    private $countryCode = null;



    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return Country
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}
