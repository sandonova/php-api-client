<?php

namespace Emis\Entity\Api\Fins\Dictionary;

/**
 *
 * @author tgatev
 *
 */
class FinStandardBasic {
	
	/**
	 * @serializable true
	 * @var int
	 */
	private $fStdCode;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $mainFStdCode;

	/**
	 * @serializable true
	 * @var string
	 */
	private $currencyCode;
	
	/**
	 * @serializable true
	 * @var int
	 */
	private $revisionId;

	/**
	 * @serializable true
	 * @var string
	 */
	private $fStdStatus;

	/**
	 * @serializable true
	 * @var string
	 */
	private $name;

	/**
	 * @serializable true
	 * @var string
	 */
	private $nameEng;

	/**
	 * @serializable true
	 * @var string
	 */
	private $description;

	/**
	 * @serializable true
	 * @var string
	 */
	private $descriptionEng;

	/**
	 * @serializable true
	 * @var \DateTime $validSince
	 */
	private $validSince;

	/**
	 * @serializable true
	 * @var \DateTime $validUntil
	 */
	private $validUntil;

	/**
	 * @serializable true
	 * @var string
	 */
	private $multiCurrency;

	/**
	 * @serializable true
	 * @var string
	 */
	private $isiEmployeeId;

	/**
	 * @serializable true
	 * @var string
	 */
	private $isiGlobal;

	/**
	 * @serializable true
	 * @var string
	 */
	private $isLocked;

	/**
	 * @serializable true
	 * @var string
	 */
	private $hideNonstdAccounts;

	/**
	 * @serializable true
	 * @var string
	 */
	private $displayOnEmis;
	
	/**
	 * @serializable true
	 * @var \DateTime $createdOn
	 */
	private $createdOn;
	/**
	 * @serializable true
	 * @var string $createdBy
	 */
	private $createdBy;
	/**
	 * @serializable true
	 * @var \DateTime $updatedOn
	 */
	private $updatedOn;
	/**
	 * @serializable true
	 * @var string $updatedBy
	 */
	private $updatedBy;
	

	/**
	 *
	 * @return the int
	 */
	public function getFStdCode() {
		return $this->fStdCode;
	}
	
	/**
	 *
	 * @param
	 *        	$fStdCode
	 */
	public function setFStdCode($fStdCode) {
		$this->fStdCode = $fStdCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getMainFStdCode() {
		return $this->mainFStdCode;
	}
	
	/**
	 *
	 * @param string $mainFStdCode        	
	 */
	public function setMainFStdCode( $mainFStdCode) {
		$this->mainFStdCode = $mainFStdCode;
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
	 * @param string $currencyCode        	
	 */
	public function setCurrencyCode( $currencyCode) {
		$this->currencyCode = $currencyCode;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getRevisionId() {
		return $this->revisionId;
	}
	
	/**
	 *
	 * @param
	 *        	$revisionId
	 */
	public function setRevisionId($revisionId) {
		$this->revisionId = $revisionId;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getFStdStatus() {
		return $this->fStdStatus;
	}
	
	/**
	 *
	 * @param string $fStdStatus        	
	 */
	public function setFStdStatus( $fStdStatus) {
		$this->fStdStatus = $fStdStatus;
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
	 * @param string $name        	
	 */
	public function setName( $name) {
		$this->name = $name;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getNameEng() {
		return $this->nameEng;
	}
	
	/**
	 *
	 * @param string $nameEng        	
	 */
	public function setNameEng( $nameEng) {
		$this->nameEng = $nameEng;
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
	public function getDescriptionEng() {
		return $this->descriptionEng;
	}
	
	/**
	 *
	 * @param string $descriptionEng        	
	 */
	public function setDescriptionEng( $descriptionEng) {
		$this->descriptionEng = $descriptionEng;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getValidSince() {
		return $this->validSince;
	}
	
	/**
	 *
	 * @param \DateTime $validSince        	
	 */
	public function setValidSince(\DateTime $validSince) {
		$this->validSince = $validSince;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getValidUntil() {
		return $this->validUntil;
	}
	
	/**
	 *
	 * @param \DateTime $validUntil        	
	 */
	public function setValidUntil(\DateTime $validUntil) {
		$this->validUntil = $validUntil;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getMultiCurrency() {
		return $this->multiCurrency;
	}
	
	/**
	 *
	 * @param string $multiCurrency        	
	 */
	public function setMultiCurrency( $multiCurrency) {
		$this->multiCurrency = $multiCurrency;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getIsiEmployeeId() {
		return $this->isiEmployeeId;
	}
	
	/**
	 *
	 * @param string $isiEmployeeId        	
	 */
	public function setIsiEmployeeId( $isiEmployeeId) {
		$this->isiEmployeeId = $isiEmployeeId;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getIsiGlobal() {
		return $this->isiGlobal;
	}
	
	/**
	 *
	 * @param string $isiGlobal        	
	 */
	public function setIsiGlobal( $isiGlobal) {
		$this->isiGlobal = $isiGlobal;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getIsLocked() {
		return $this->isLocked;
	}
	
	/**
	 *
	 * @param string $isLocked        	
	 */
	public function setIsLocked( $isLocked) {
		$this->isLocked = $isLocked;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getHideNonstdAccounts() {
		return $this->hideNonstdAccounts;
	}
	
	/**
	 *
	 * @param string $hideNonstdAccounts        	
	 */
	public function setHideNonstdAccounts( $hideNonstdAccounts) {
		$this->hideNonstdAccounts = $hideNonstdAccounts;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getDisplayOnEmis() {
		return $this->displayOnEmis;
	}
	
	/**
	 *
	 * @param string $displayOnEmis        	
	 */
	public function setDisplayOnEmis( $displayOnEmis) {
		$this->displayOnEmis = $displayOnEmis;
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
	
	
}