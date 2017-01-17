<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of CompanyExecutive
 *
 * @author dsales
 */
class CompanyExecutive 
{
    /**
     * @serializable false
     * @var string isic+sequence
     */
    private $executiveId = null;

    /**
     * @var string
     * basics_ENGLISH->EXECUTIVE_LIST->POSITION
     */
    private $executiveCode = null;

    /**
     * @var string
     * basics_ENGLISH->EXECUTIVE_LIST->GLOBAL_POSITION
     */
    private $globalExecutiveCode = null;

    /**
     * @var string
     * basics_ENGLISH->EXECUTIVE_LIST->POSITION_NAME
     */
    private $executiveUserDefinedPosition = null;

    /**
     * @var string
     * basics_LOCAL->EXECUTIVE_LIST->POSITION_NAME
     */
    private $executiveUserDefinedPositionLocal = null;

    /**
     * @var string
     * basics_ENGLISH->EXECUTIVE_LIST->EXECUTIVE_NAME
     */
    private $executiveName = null;

    /**
     * @var string
     * basics_LOCAL->EXECUTIVE_LIST->EXECUTIVE_NAME
     */
    private $executiveNameLocal = null;

    /**
    * @return string isic+sequence
    */    
    public function getExecutiveId() 
    {
        return $this->executiveId;
    }

    /**
    * @param string isic+sequence $executiveId
    * @return CompanyExecutive 
    */
    public function setExecutiveId($executiveId)
    {
        $this->executiveId = $executiveId;
        return $this;
    }

    /**
    * @return string
    */    
    public function getExecutiveCode() 
    {
        return $this->executiveCode;
    }

    /**
    * @param string $executiveCode
    * @return CompanyExecutive 
    */
    public function setExecutiveCode($executiveCode)
    {
        $this->executiveCode = $executiveCode;
        return $this;
    }

    /**
    * @return string
    */    
    public function getGlobalExecutiveCode() 
    {
        return $this->globalExecutiveCode;
    }

    /**
    * @param string $globalExecutiveCode
    * @return CompanyExecutive 
    */
    public function setGlobalExecutiveCode($globalExecutiveCode)
    {
        $this->globalExecutiveCode = $globalExecutiveCode;
        return $this;
    }

    /**
    * @return string
    */    
    public function getExecutiveUserDefinedPosition() 
    {
        return $this->executiveUserDefinedPosition;
    }

    /**
    * @param string $executiveUserDefinedPosition
    * @return CompanyExecutive 
    */
    public function setExecutiveUserDefinedPosition($executiveUserDefinedPosition)
    {
        $this->executiveUserDefinedPosition = $executiveUserDefinedPosition;
        return $this;
    }

    /**
    * @return string
    */    
    public function getExecutiveUserDefinedPositionLocal() 
    {
        return $this->executiveUserDefinedPositionLocal;
    }

    /**
    * @param string $executiveUserDefinedPositionLocal
    * @return CompanyExecutive 
    */
    public function setExecutiveUserDefinedPositionLocal($executiveUserDefinedPositionLocal)
    {
        $this->executiveUserDefinedPositionLocal = $executiveUserDefinedPositionLocal;
        return $this;
    }

    /**
    * @return string
    */    
    public function getExecutiveName() 
    {
        return $this->executiveName;
    }

    /**
    * @param string $executiveName
    * @return CompanyExecutive 
    */
    public function setExecutiveName($executiveName)
    {
        $this->executiveName = $executiveName;
        return $this;
    }

    /**
    * @return string
    */    
    public function getExecutiveNameLocal() 
    {
        return $this->executiveNameLocal;
    }

    /**
    * @param string $executiveNameLocal
    * @return CompanyExecutive 
    */
    public function setExecutiveNameLocal($executiveNameLocal)
    {
        $this->executiveNameLocal = $executiveNameLocal;
        return $this;
    }
}
