<?php

namespace Emis\Entity\Api\Fins\Dictionary;

/**
 * @author tgatev
 *
 */
class CompanyType{

	/**
	 * @serializable true
	 * @var string $companyType
	 */
	private $companyType;
	/**
	 * @serializable true
	 * @var string $description
	 */
	private $description;
	/**
	 * @serializable true
	 * @var string $label
	 */
	private $label;

	
	/**
	 *
	 * @return the string
	 */
	public function getCompanyType() {
		return $this->companyType;
	}
	
	/**
	 *
	 * @param string $companyType        	
	 */
	public function setCompanyType($companyType) {
		$this->companyType = $companyType;
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
	
	
	
}