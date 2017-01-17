<?php
namespace Emis\Entity\Api\Fins\Dictionary;

class LocalExecutivePosition extends GlobalExecutivePosition{
	/**
	 * @serializable true
	 * @var string $position
	 */
	private $position;
	
	/**
	 * @serializable true
	 * @var string $countryCode
	 */
	private $countryCode;
	/**
	 * @serializable true
	 * @var string $positionName
	 */
	private $positionName;
	/**
	 * @serializable true
	 * @var string $positionNameEng
	 */
	private $positionNameEng;
	/**
	 * @serializable true
	 * @var int $displayOrder
	 */
	private $displayOrder;
	
	/**
	 *
	 * @return the string
	 */
	public function getPosition() {
		return $this->position;
	}
	
	/**
	 *
	 * @param string $position        	
	 */
	public function setPosition( $position) {
		$this->position = $position;
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
	public function setCountryCode( $countryCode) {
		$this->countryCode = $countryCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getPositionName() {
		return $this->positionName;
	}
	
	/**
	 *
	 * @param string $positionName        	
	 */
	public function setPositionName( $positionName) {
		$this->positionName = $positionName;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getPositionNameEng() {
		return $this->positionNameEng;
	}
	
	/**
	 *
	 * @param string $positionNameEng        	
	 */
	public function setPositionNameEng( $positionNameEng) {
		$this->positionNameEng = $positionNameEng;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getDisplayOrder() {
		return $this->displayOrder;
	}
	
	/**
	 *
	 * @param int $displayOrder        	
	 */
	public function setDisplayOrder( $displayOrder) {
		$this->displayOrder = $displayOrder;
		return $this;
	}
	
	
	
}
