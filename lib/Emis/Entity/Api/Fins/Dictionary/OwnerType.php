<?php
namespace Emis\Entity\Api\Fins\Dictionary;

/**
 * @author tgatev
 *
 */
class OwnerType{
	
	/**
	 * 
	 * @serializable true
	 * @var string
	 */
	private $ownershipType;
	
	/**
	 *
	 * @serializable true
	 * @var string
	 */
	private $label;
	
	/**
	 *
	 * @serializable true
	 * @var string
	 */
	private $description;
	

	
	/**
	 *
	 * @return the string
	 */
	public function getOwnershipType() {
		return $this->ownershipType;
	}
	
	/**
	 *
	 * @param string $ownershipType        	
	 */
	public function setOwnershipType( $ownershipType) {
		$this->ownershipType = $ownershipType;
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
	public function setLabel( $label) {
		$this->label = $label;
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
	public function setDescription( $description) {
		$this->description = $description;
		return $this;
	}
	
	
	
}