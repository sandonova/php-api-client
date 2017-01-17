<?php

namespace Emis\Entity\Api\Fins\Dictionary;

/**
 * @author tgatev
 *
 */
class OperationalStatus{

	/**
	 * @serializable true
	 * @var string $operationalStatus
	 */
	private $operationalStatus;
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
	public function getOperationalStatus() {
		return $this->operationalStatus;
	}
	
	/**
	 *
	 * @param string $operationalStatus        	
	 */
	public function setOperationalStatus($operationalStatus) {
		$this->operationalStatus = $operationalStatus;
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