<?php
namespace Emis\Entity\Api\Fins\Dictionary;

/**
 * 
 * @author tgatev
 *
 */
class Region{
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $zoneCode;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $zoneName;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $zoneNameEng;
	
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
	public function getZoneName() {
		return $this->zoneName;
	}
	
	/**
	 *
	 * @param string $zoneName        	
	 */
	public function setZoneName( $zoneName) {
		$this->zoneName = $zoneName;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getZoneNameEng() {
		return $this->zoneNameEng;
	}
	
	/**
	 *
	 * @param string $zoneNameEng        	
	 */
	public function setZoneNameEng( $zoneNameEng) {
		$this->zoneNameEng = $zoneNameEng;
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