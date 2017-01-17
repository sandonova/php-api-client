<?php

namespace Emis\Entity\Api\Fins\Dictionary;

class LocalLegalForm extends GlobalLegalForm{
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $legalForm;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $countryCode;

	
	/**
	 *
	 * @return the string
	 */
	public function getLegalForm() {
		return $this->legalForm;
	}
	
	/**
	 *
	 * @param string $legalForm        	
	 */
	public function setLegalForm( $legalForm) {
		$this->legalForm = $legalForm;
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
	
	
	
}