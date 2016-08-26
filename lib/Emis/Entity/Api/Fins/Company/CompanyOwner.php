<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of CompanyOwner
 *
 * @author dsales
 */
class CompanyOwner 
{
    /**
     * @serializable false
     * @var string isic+sequence
     */
    private $ownerId = null;

    /**
     * @var string
     * ownership_ENGLISH->COMPANY_OWNER_LIST->OWNERSHIP_TYPE
     */
    private $ownershipType = null;

    /**
     * @var string
     * ownership_ENGLISH->COMPANY_OWNER_LIST->DISPLAY_NAME
     */
    private $ownerName = null;

    /**
     * @var string
     * ownership_LOCAL->COMPANY_OWNER_LIST->DISPLAY_NAME
     */
    private $ownerNameLocal = null;

    /**
     * @var string
     * ownership_ENGLISH->COMPANY_OWNER_LIST->OWNER_TYPE
     */
    private $ownerType = null;

    /**
     * @var string
     * ownership_ENGLISH->COMPANY_OWNER_LIST->COUNTRY_CODE
     */
    private $ownerCountry = null;

    /**
     * @var int
     * ownership_ENGLISH->COMPANY_OWNER_LIST->COMPANY_ID
     */
    private $ownerIsic = null;

    /**
     * @var number
     * ownership_ENGLISH->COMPANY_OWNER_LIST->PERCENT
     */
    private $ownershipPercentage = null;

    /**
     * @var string
     * ownership_ENGLISH->COMPANY_OWNER_LIST->EXTERNAL_ID
     */
    private $ownerExternalId = null;

    /**
     * @var string
     * ownership_ENGLISH->COMPANY_OWNER_LIST->CLASS_CODE
     */
    private $ownerExternalIdClass = null;

    /**
    * @return string isic+sequence
    */    
    public function getOwnerId() 
    {
        return $this->ownerId;
    }

    /**
    * @param string isic+sequence $ownerId
    * @return CompanyOwner 
    */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
    * @return string
    */    
    public function getOwnershipType() 
    {
        return $this->ownershipType;
    }

    /**
    * @param string $ownershipType
    * @return CompanyOwner 
    */
    public function setOwnershipType($ownershipType)
    {
        $this->ownershipType = $ownershipType;
        return $this;
    }

    /**
    * @return string
    */    
    public function getOwnerName() 
    {
        return $this->ownerName;
    }

    /**
    * @param string $ownerName
    * @return CompanyOwner 
    */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;
        return $this;
    }

    /**
    * @return string
    */    
    public function getOwnerNameLocal() 
    {
        return $this->ownerNameLocal;
    }

    /**
    * @param string $ownerNameLocal
    * @return CompanyOwner 
    */
    public function setOwnerNameLocal($ownerNameLocal)
    {
        $this->ownerNameLocal = $ownerNameLocal;
        return $this;
    }

    /**
    * @return string
    */    
    public function getOwnerType() 
    {
        return $this->ownerType;
    }

    /**
    * @param string $ownerType
    * @return CompanyOwner 
    */
    public function setOwnerType($ownerType)
    {
        $this->ownerType = $ownerType;
        return $this;
    }

    /**
    * @return string
    */    
    public function getOwnerCountry() 
    {
        return $this->ownerCountry;
    }

    /**
    * @param string $ownerCountry
    * @return CompanyOwner 
    */
    public function setOwnerCountry($ownerCountry)
    {
        $this->ownerCountry = $ownerCountry;
        return $this;
    }

    /**
    * @return int
    */    
    public function getOwnerIsic() 
    {
        return $this->ownerIsic;
    }

    /**
    * @param int $ownerIsic
    * @return CompanyOwner 
    */
    public function setOwnerIsic($ownerIsic)
    {
        $this->ownerIsic = $ownerIsic;
        return $this;
    }

    /**
    * @return number
    */    
    public function getOwnershipPercentage() 
    {
        return $this->ownershipPercentage;
    }

    /**
    * @param number $ownershipPercentage
    * @return CompanyOwner 
    */
    public function setOwnershipPercentage($ownershipPercentage)
    {
        $this->ownershipPercentage = $ownershipPercentage;
        return $this;
    }

    /**
    * @return string
    */    
    public function getOwnerExternalId() 
    {
        return $this->ownerExternalId;
    }

    /**
    * @param string $ownerExternalId
    * @return CompanyOwner 
    */
    public function setOwnerExternalId($ownerExternalId)
    {
        $this->ownerExternalId = $ownerExternalId;
        return $this;
    }

    /**
    * @return string
    */    
    public function getOwnerExternalIdClass() 
    {
        return $this->ownerExternalIdClass;
    }

    /**
    * @param string $ownerExternalIdClass
    * @return CompanyOwner 
    */
    public function setOwnerExternalIdClass($ownerExternalIdClass)
    {
        $this->ownerExternalIdClass = $ownerExternalIdClass;
        return $this;
    }
}
