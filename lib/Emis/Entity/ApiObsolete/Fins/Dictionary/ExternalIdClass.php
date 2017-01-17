<?php

namespace Emis\Entity\Api\Fins\Dictionary;

/**
 * @author tgatev
 *
 */
class ExternalIdClass{

	/**
	 * @serializable true
	 * @var string $classCode
	 */
	private $classCode;
	/**
	 * @serializable true
	 * @var string $description
	 */
	private $description;
	/**
	 * @serializable true
	 * @var string $multivalue
	 */
	private $multivalue;
	/**
	 * @serializable true
	 * @var string $label
	 */
	private $label;
	/**
	 * @serializable true
	 * @var string $classType
	 */
	private $classType;
	/**
	 * @serializable true
	 * @var string $countryCode
	 */
	private $countryCode;

	
	/**
	 *
	 * @return the string
	 */
	public function getClassCode() {
		return $this->classCode;
	}
	
	/**
	 *
	 * @param string $classCode        	
	 */
	public function setClassCode($classCode) {
		$this->classCode = $classCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 *
	 * @param string $description        	
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getMultivalue() {
		return $this->multivalue;
	}
	
	/**
	 *
	 * @param string $multivalue        	
	 */
	public function setMultivalue($multivalue) {
		$this->multivalue = $multivalue;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getLabel() {
		return $this->label;
	}
	
	/**
	 *
	 * @param string $label        	
	 */
	public function setLabel($label) {
		$this->label = $label;
		return $this;
	}
	
	/**
	 *
	 * @return string string
	 */
	public function getClassType() {
		return $this->classType;
	}
	
	/**
	 *
	 * @param string $classType        	
	 */
	public function setClassType($classType) {
		$this->classType = $classType;
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
	
	
}