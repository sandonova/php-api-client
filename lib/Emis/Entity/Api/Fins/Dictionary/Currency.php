<?php
namespace Emis\Entity\Api\Fins\Dictionary;

class Currency{
	/**
	 * @serializable true
	 * @var string $symbol
	 */
	private $symbol;
	/**
	 * @serializable true
	 * @var string $description
	 */
	private $description;
	/**
	 * @serializable true
	 * @var string $currencyCode
	 */
	private $currencyCode;
	/**
	 * @serializable true
	 * @var string $name
	 */
	private $name;

	
	/**
	 *
	 * @return the string
	 */
	public function getSymbol() {
		return $this->symbol;
	}
	
	/**
	 *
	 * @param self $symbol        	
	 */
	public function setSymbol($symbol) {
		$this->symbol = $symbol;
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
	public function getCurrencyCode() {
		return $this->currencyCode;
	}
	
	/**
	 *
	 * @param self $currencyCode        	
	 */
	public function setCurrencyCode($currencyCode) {
		$this->currencyCode = $currencyCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 *
	 * @param self $name        	
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}
	

	
}