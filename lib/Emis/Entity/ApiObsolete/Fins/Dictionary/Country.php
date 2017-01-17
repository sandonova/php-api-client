<?php
namespace Emis\Entity\Api\Fins\Dictionary;
class Country{
	
	/**
	 * @serializable true
	 * @var string regionCode
	 */
	private $regionCode;
	/**
	 * @serializable true
	 * @var float
	 */
	private $taxRate;
	/**
	 * @serializable true
	 * @var string
	 */
	private $csIsiOffice;
	/**
	 * @serializable true
	 * @var string
	 */
	private $langCode;
	/**
	 * @serializable true
	 * @var string 
	 */
	private $findbYN;
	/**
	 * @serializable true
	 * @var string
	 */
	private $currencyCode;

	/**
	 * @serializable true
	 * @var string
	 */
	private $salesIsiOffice;

	/**
	 * @serializable true
	 * @var string
	 */
	private $name;

	/**
	 * @serializable true
	 * @var string
	 */
	private $countryCode;
	
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $gmt;


	
	/**
	 *
	 * @return the string
	 */
	public function getRegionCode() {
		return $this->regionCode;
	}
	
	/**
	 *
	 * @param unknown_type $regionCode        	
	 */
	public function setRegionCode($regionCode) {
		$this->regionCode = $regionCode;
		return $this;
	}
	
	/**
	 *
	 * @return the float
	 */
	public function getTaxRate() {
		return $this->taxRate;
	}
	
	/**
	 *
	 * @param
	 *        	$taxRate
	 */
	public function setTaxRate($taxRate) {
		$this->taxRate = $taxRate;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getCsIsiOffice() {
		return $this->csIsiOffice;
	}
	
	/**
	 *
	 * @param string $csIsiOffice        	
	 */
	public function setCsIsiOffice($csIsiOffice) {
		$this->csIsiOffice = $csIsiOffice;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getLangCode() {
		return $this->langCode;
	}
	
	/**
	 *
	 * @param string $langCode        	
	 */
	public function setLangCode($langCode) {
		$this->langCode = $langCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getFindbYN() {
		return $this->findbYN;
	}
	
	/**
	 *
	 * @param string $findbYN        	
	 */
	public function setFindbYN($findbYN) {
		$this->findbYN = $findbYN;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getCurrencyCode() {
		return $this->currencyCode;
	}
	
	/**
	 *
	 * @param string $currencyCode        	
	 */
	public function setCurrencyCode($currencyCode) {
		$this->currencyCode = $currencyCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getSalesIsiOffice() {
		return $this->salesIsiOffice;
	}
	
	/**
	 *
	 * @param string $salesIsiOffice        	
	 */
	public function setSalesIsiOffice($salesIsiOffice) {
		$this->salesIsiOffice = $salesIsiOffice;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 *
	 * @param string $name        	
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getCountryCode() {
		return $this->countryCode;
	}
	
	/**
	 *
	 * @param string $countryCode        	
	 */
	public function setCountryCode($countryCode) {
		$this->countryCode = $countryCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getGmt() {
		return $this->gmt;
	}
	
	/**
	 *
	 * @param string $gmt        	
	 */
	public function setGmt($gmt) {
		$this->gmt = $gmt;
		return $this;
	}
	
	
}