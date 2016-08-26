<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of CompanyNaics
 *
 * @author dsales
 */
class CompanyNaics 
{
    /**
     * @var int
     */
    private $naics = null;

    /**
    * @return int
    */    
    public function getNaics() 
    {
        return $this->naics;
    }

    /**
    * @param int $naics
    * @return CompanyNaics
    */
    public function setNaics($naics)
    {
        $this->naics = $naics;
        return $this;
    }
}
