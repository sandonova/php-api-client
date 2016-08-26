<?php
namespace Emis\Entity\Api\Fins\Dictionary;

/**
 * @author tgatev
 *
 */
class StockExchange{

	/**
	 * @serializable true
	 * @var string $name
	 */
	private $name;
	
	/**
	 * @serializable true
	 * @var string $nameEng
	 */
	private $nameEng;
	
	/**
	 * @serializable true
	 * @var string $stockExchangeId
	 */
	private $stockExchangeId;
	
	/**
	 * @serializable true
	 * @var string $countryCode
	 */
	private $countryCode;
	
	/**
	 * @serializable true
	 * @var \DateTime $createdOn
	 */
	private $createdOn;
	/**
	 * @serializable true
	 * @var string $createdBy
	 */
	private $createdBy;
	/**
	 * @serializable true
	 * @var \DateTime $updatedOn
	 */
	private $updatedOn;
	/**
	 * @serializable true
	 * @var string $updatedBy
	 */
	private $updatedBy;
	
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
	public function getNameEng() {
		return $this->nameEng;
	}
	
	/**
	 *
	 * @param string $nameEng        	
	 */
	public function setNameEng($nameEng) {
		$this->nameEng = $nameEng;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getStockExchangeId() {
		return $this->stockExchangeId;
	}
	
	/**
	 *
	 * @param string $stockExchangeId        	
	 */
	public function setStockExchangeId($stockExchangeId) {
		$this->stockExchangeId = $stockExchangeId;
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
	public function getCreatedBy() {
		return $this->createdBy;
	}
	
	/**
	 *
	 * @param string $createdBy        	
	 */
	public function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		return $this;
	}

	/**
	 *
	 * @return the string
	 */
	public function getUpdatedBy() {
		return $this->updatedBy;
	}
	
	/**
	 *
	 * @param string $updatedBy        	
	 */
	public function setUpdatedBy($updatedBy) {
		$this->updatedBy = $updatedBy;
		return $this;
	}
	
	/**
	 *
	 * @return the DateTime
	 */
	public function getCreatedOn() {
		return $this->createdOn;
	}
	
	/**
	 *
	 * @param \DateTime $createdOn        	
	 */
	public function setCreatedOn(\DateTime $createdOn) {
		$this->createdOn = $createdOn;
		return $this;
	}
	
	/**
	 *
	 * @return the DateTime
	 */
	public function getUpdatedOn() {
		return $this->updatedOn;
	}
	
	/**
	 *
	 * @param \DateTime $updatedOn        	
	 */
	public function setUpdatedOn(\DateTime $updatedOn) {
		$this->updatedOn = $updatedOn;
		return $this;
	}
	
	
	
}