<?php
namespace Emis\Entity\Api\Fins\Dictionary;

class GlobalLegalForm{
	/**
	 * @serializable true
	 * @var string $globalLegalForm
	 */
	private $globalLegalForm;
	
	/**
	 * @serializable true
	 * @var string $description
	 */
	private $description;
	
	/**
	 * @serializable true
	 * @var string $lable
	 */
	private $lable;
	

	
	/**
	 *
	 * @return the string
	 */
	public function getGlobalLegalForm() {
		return $this->globalLegalForm;
	}
	
	/**
	 *
	 * @param self $globalLegalForm        	
	 */
	public function setGlobalLegalForm($globalLegalForm) {
		$this->globalLegalForm = $globalLegalForm;
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
	 * @param self $description        	
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getLable() {
		return $this->lable;
	}
	
	/**
	 *
	 * @param self $lable        	
	 */
	public function setLable($lable) {
		$this->lable = $lable;
		return $this;
	}
	
}