<?php

namespace Emis\Entity\Api\Fins\Dictionary;

/**
 * 
 * @author tgatev
 *
 */
class FinancialPeriodCode{
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $fPeriodCode;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $cumulative;
	
	/**
	 * @serializable true
	 * @var int
	 */
	private $beginFinMonth;
	
	/**
	 * @serializable true
	 * @var int
	 */
	private $endFinMonth;

	/**
	 * @serializable true
	 * @var string
	 */
	private $label;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $description;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $notes;
	/**
	 * @serializable true
	 * @var string
	 */
	private $fPeriodType;
	/**
	 * @serializable true
	 * @var string
	 */
	private $annualizeMultipler;
	/**
	 * @serializable true
	 * @var int
	 */
	private $periodRank;
	/**
	 * @serializable true
	 * @var int
	 */
	private $fPeriodGroup;
	

	
	
	/**
	 *
	 * @return the string
	 */
	public function getCumulative() {
		return $this->cumulative;
	}
	
	/**
	 *
	 * @param string $cumulative        	
	 */
	public function setCumulative( $cumulative) {
		$this->cumulative = $cumulative;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getBeginFinMonth() {
		return $this->beginFinMonth;
	}
	
	/**
	 *
	 * @param
	 *        	$beginFinMonth
	 */
	public function setBeginFinMonth($beginFinMonth) {
		$this->beginFinMonth = $beginFinMonth;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getEndFinMonth() {
		return $this->endFinMonth;
	}
	
	/**
	 *
	 * @param
	 *        	$endFinMonth
	 */
	public function setEndFinMonth($endFinMonth) {
		$this->endFinMonth = $endFinMonth;
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
	
	/**
	 *
	 * @return the string
	 */
	public function getNotes() {
		return $this->notes;
	}
	
	/**
	 *
	 * @param string $notes        	
	 */
	public function setNotes( $notes) {
		$this->notes = $notes;
		return $this;
	}
	
	
	/**
	 *
	 * @return the string
	 */
	public function getAnnualizeMultipler() {
		return $this->annualizeMultipler;
	}
	
	/**
	 *
	 * @param string $annualizeMultipler        	
	 */
	public function setAnnualizeMultipler( $annualizeMultipler) {
		$this->annualizeMultipler = $annualizeMultipler;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getPeriodRank() {
		return $this->periodRank;
	}
	
	/**
	 *
	 * @param
	 *        	$periodRank
	 */
	public function setPeriodRank($periodRank) {
		$this->periodRank = $periodRank;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getFPeriodCode() {
		return $this->fPeriodCode;
	}
	
	/**
	 *
	 * @param string $fPeriodCode        	
	 */
	public function setFPeriodCode( $fPeriodCode) {
		$this->fPeriodCode = $fPeriodCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getFPeriodType() {
		return $this->fPeriodType;
	}
	
	/**
	 *
	 * @param string $fPeriodType        	
	 */
	public function setFPeriodType( $fPeriodType) {
		$this->fPeriodType = $fPeriodType;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getFPeriodGroup() {
		return $this->fPeriodGroup;
	}
	
	/**
	 *
	 * @param
	 *        	$fPeriodGroup
	 */
	public function setFPeriodGroup($fPeriodGroup) {
		$this->fPeriodGroup = $fPeriodGroup;
		return $this;
	}
	
	
	
	
}



