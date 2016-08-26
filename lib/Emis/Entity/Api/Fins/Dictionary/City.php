<?php
namespace Emis\Entity\Api\Fins\Dictionary;
;

/**
 * 
 * @author tgatev
 *
 */
class City{
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $zoneCode;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $cityCode;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $cityName;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $cityNameEng;
	
	/**
	 * @serializable true
	 * @var \DateTime
	 */
	private $updatedOn;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $updatedBy;
	
	/**
	 * @serializable true
	 * @var \DateTime
	 */
	private $createdOn;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $createdBy;

	
	/**
	 *
	 * @return the string
	 */
	public function getZoneCode() {
		return $this->zoneCode;
	}
	
	/**
	 *
	 * @param string $zoneCode        	
	 */
	public function setZoneCode( $zoneCode) {
		$this->zoneCode = $zoneCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getCityCode() {
		return $this->cityCode;
	}
	
	/**
	 *
	 * @param string $cityCode        	
	 */
	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getCityName() {
		return $this->cityName;
	}
	
	/**
	 *
	 * @param string $cityName        	
	 */
	public function setCityName($cityName) {
		$this->cityName = $cityName;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getCityNameEng() {
		return $this->cityNameEng;
	}
	
	/**
	 *
	 * @param string $cityNameEng        	
	 */
	public function setCityNameEng($cityNameEng) {
		$this->cityNameEng = $cityNameEng;
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
	
	/**
	 *
	 * @return the DateTime
	 */
	public function getUpdatedBy() {
		return $this->updatedBy;
	}
	
	/**
	 *
	 * @param string $updatedBy        	
	 */
	public function setUpdatedBy( $updatedBy) {
		$this->updatedBy = $updatedBy;
		return $this;
	}
	
	/**
	 *
	 * @return the string
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
	 * @return the string
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}
	
	/**
	 *
	 * @param string $createdBy        	
	 */
	public function setCreatedBy( $createdBy) {
		$this->createdBy = $createdBy;
		return $this;
	}
	
	
}