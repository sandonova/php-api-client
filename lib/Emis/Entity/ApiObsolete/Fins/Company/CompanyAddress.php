<?php

namespace Emis\Entity\Api\Fins\Company;

/**
 * Description of CompanyAddress
 *
 * @author dsales
 */
class CompanyAddress 
{
    /**
     * @serializable false 
     * @var string isic+sequence
     */
    private $addressId = null;

    /**
     * @var string
     * @serializable false 
     * basics_ENGLISH->ADDRESS_LIST->ADDRESS_TYPE
     */
    private $addressType = null;

    /**
     * @var string
     * basics_ENGLISH->ADDRESS_LIST->REGION
     */
    private $region = null;

    /**
     * @var string
     * basics_LOCAL->ADDRESS_LIST->REGION
     */
    private $regionLocal = null;

    /**
     * @var string
     * basics_ENGLISH->ADDRESS_LIST->CITY
     */
    private $city = null;

    /**
     * @var string
     * basics_LOCAL->ADDRESS_LIST->CITY
     */
    private $cityLocal = null;

    /**
     * @var string
     * basics_ENGLISH->ADDRESS_LIST->ADDRESS_TEXT
     */
    private $address = null;

    /**
     * @var string
     * basics_LOCAL->ADDRESS_LIST->ADDRESS_TEXT
     */
    private $addressLocal = null;

    /**
     * @var string
     * basics_ENGLISH->ADDRESS_LIST->PHONES
     */
    private $phone = null;

    /**
     * @var string
     * basics_ENGLISH->ADDRESS_LIST->FAXES
     */
    private $fax = null;

    /**
     * @var string
     * basics_ENGLISH->ADDRESS_LIST->URL
     */
    private $url = null;

    /**
     * @var string
     * basics_ENGLISH->ADDRESS_LIST->EMAILS
     */
    private $email = null;

    /**
     * @var string
     * basics_ENGLISH->ADDRESS_LIST->POSTAL_CODE
     */
    private $postalCode = null;

    /**
    * @return string isic+sequence
    */    
    public function getAddressId() 
    {
        return $this->addressId;
    }

    /**
    * @param string isic+sequence $addressId
    * @return CompanyAddress 
    */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;
        return $this;
    }

    /**
    * @return string
    */    
    public function getAddressType() 
    {
        return $this->addressType;
    }

    /**
    * @param string $addressType
    * @return CompanyAddress 
    */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
        return $this;
    }

    /**
    * @return string
    */    
    public function getRegion() 
    {
        return $this->region;
    }

    /**
    * @param string $region
    * @return CompanyAddress 
    */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
    * @return string
    */    
    public function getRegionLocal() 
    {
        return $this->regionLocal;
    }

    /**
    * @param string $regionLocal
    * @return CompanyAddress 
    */
    public function setRegionLocal($regionLocal)
    {
        $this->regionLocal = $regionLocal;
        return $this;
    }

    /**
    * @return string
    */    
    public function getCity() 
    {
        return $this->city;
    }

    /**
    * @param string $city
    * @return CompanyAddress 
    */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
    * @return string
    */    
    public function getCityLocal() 
    {
        return $this->cityLocal;
    }

    /**
    * @param string $cityLocal
    * @return CompanyAddress 
    */
    public function setCityLocal($cityLocal)
    {
        $this->cityLocal = $cityLocal;
        return $this;
    }

    /**
    * @return string
    */    
    public function getAddress() 
    {
        return $this->address;
    }

    /**
    * @param string $address
    * @return CompanyAddress 
    */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
    * @return string
    */    
    public function getAddressLocal() 
    {
        return $this->addressLocal;
    }

    /**
    * @param string $addressLocal
    * @return CompanyAddress 
    */
    public function setAddressLocal($addressLocal)
    {
        $this->addressLocal = $addressLocal;
        return $this;
    }

    /**
    * @return string
    */    
    public function getPhone() 
    {
        return $this->phone;
    }

    /**
    * @param string $phone
    * @return CompanyAddress 
    */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
    * @return string
    */    
    public function getFax() 
    {
        return $this->fax;
    }

    /**
    * @param string $fax
    * @return CompanyAddress 
    */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
    * @return string
    */    
    public function getUrl() 
    {
        return $this->url;
    }

    /**
    * @param string $url
    * @return CompanyAddress 
    */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
    * @return string
    */    
    public function getEmail() 
    {
        return $this->email;
    }

    /**
    * @param string $email
    * @return CompanyAddress 
    */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
    * @return string
    */    
    public function getPostalCode() 
    {
        return $this->postalCode;
    }

    /**
    * @param string $postalCode
    * @return CompanyAddress 
    */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }
}

