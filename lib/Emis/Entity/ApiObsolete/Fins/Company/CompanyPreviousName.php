<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of CompanyPreviousName
 *
 * @author dsales
 */
class CompanyPreviousName
{
    /**
     * @serializable false 
     * @var string isic+sequence
     */
    private $previousNameId = null;

    /**
     * @var string
     * basics_LOCAL->COMPANY_PREVIOUS_NAME_LIST->NAME_ENG
     */
    private $previousNameName = null;

    /**
     * @var string
     * basics_LOCAL->COMPANY_PREVIOUS_NAME_LIST->NAME
     */
    private $previousNameLocalName = null;

    /**
     * @var int
     * basics_LOCAL->COMPANY_PREVIOUS_NAME_LIST->REGISTRATION_YEAR
     */
    private $previousNameChangeYear = null;

    /**
    * @return string isic+sequence
    */    
    public function getPreviousNameId() 
    {
        return $this->previousNameId;
    }

    /**
    * @param string isic+sequence $previousNameId
    * @return CompanyPreviousName 
    */
    public function setPreviousNameId($previousNameId)
    {
        $this->previousNameId = $previousNameId;
        return $this;
    }

    /**
    * @return string
    */    
    public function getPreviousNameName() 
    {
        return $this->previousNameName;
    }

    /**
    * @param string $previousNameName
    * @return CompanyPreviousName 
    */
    public function setPreviousNameName($previousNameName)
    {
        $this->previousNameName = $previousNameName;
        return $this;
    }

    /**
    * @return string
    */    
    public function getPreviousNameLocalName() 
    {
        return $this->previousNameLocalName;
    }

    /**
    * @param string $previousNameLocalName
    * @return CompanyPreviousName 
    */
    public function setPreviousNameLocalName($previousNameLocalName)
    {
        $this->previousNameLocalName = $previousNameLocalName;
        return $this;
    }

    /**
    * @return int
    */    
    public function getPreviousNameChangeYear() 
    {
        return $this->previousNameChangeYear;
    }

    /**
    * @param int $previousNameChangeYear
    * @return CompanyPreviousName 
    */
    public function setPreviousNameChangeYear($previousNameChangeYear)
    {
        $this->previousNameChangeYear = $previousNameChangeYear;
        return $this;
    }

}
