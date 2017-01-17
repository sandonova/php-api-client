<?php
namespace Emis\Entity\Api\Fins\Dictionary;
/**
 * 
 * 
 * @author tgatev
 *
 */

class FinStandardAccount{

	/**
	 * @serializable true
	 * @var int 
	 */
	private $fstdCode;

	/**
	 * @serializable true
	 * @var string 
	 */
	private $fstdAccountCode;

	/**
	 * @serializable true
	 * @var string 
	 */
	private $parentFstdAccountCode;

	/**
	 * @serializable true
	 * @var string 
	 */
	private $fstdAcccountStructCode;

	/**
	 * @serializable true
	 * @var int 
	 */
	private $indentationLevel;

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
	 * @var int 
	 */
	private $displayOrder;

	/**
	 * @serializable true
	 * @var string 
	 */
	private $statmentType;

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
	 * @var string 
	 */
	private $accountSign;

	/**
	 * @serializable true
	 * @var int 
	 */
	private $mandatory;

	/**
	 * @serializable true
	 * @var string 
	 */
	private $allowNegativeValue;

	/**
	 * @serializable true
	 * @var string 
	 */
	private $allowZeroValue;

	/**
	 * @serializable true
	 * @var string 
	 */
	private $checkshumSubaccounts;

	/**
	 * @serializable true
	 * @var string 
	 */
	private $notes;

	/**
	 * @serializable true
	 * @var string 
	 */
	private $anualize;

	/**
	 * @serializable true
	 * @var string 
	 */
	private $display;

	/**
	 * @serializable true
	 * @var string 
	 */
	private $units;

	/**
	 * @serializable true
	 * @var string 
	 */
	private $displayLocation;
	
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
	public function getFstdCode() {
		return $this->fstdCode;
	}
	
	/**
	 *
	 * @param
	 *        	$fstdCode
	 */
	public function setFstdCode($fstdCode) {
		$this->fstdCode = $fstdCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getFstdAccountCode() {
		return $this->fstdAccountCode;
	}
	
	/**
	 *
	 * @param string $fstdAccountCode        	
	 */
	public function setFstdAccountCode( $fstdAccountCode) {
		$this->fstdAccountCode = $fstdAccountCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getParentFstdAccountCode() {
		return $this->parentFstdAccountCode;
	}
	
	/**
	 *
	 * @param string $parentFstdAccountCode        	
	 */
	public function setParentFstdAccountCode( $parentFstdAccountCode) {
		$this->parentFstdAccountCode = $parentFstdAccountCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getFstdAcccountStructCode() {
		return $this->fstdAcccountStructCode;
	}
	
	/**
	 *
	 * @param string $fstdAcccountStructCode        	
	 */
	public function setFstdAcccountStructCode( $fstdAcccountStructCode) {
		$this->fstdAcccountStructCode = $fstdAcccountStructCode;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getIndentationLevel() {
		return $this->indentationLevel;
	}
	
	/**
	 *
	 * @param
	 *        	$indentationLevel
	 */
	public function setIndentationLevel($indentationLevel) {
		$this->indentationLevel = $indentationLevel;
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
	 * @return the int
	 */
	public function getDisplayOrder() {
		return $this->displayOrder;
	}
	
	/**
	 *
	 * @param
	 *        	$displayOrder
	 */
	public function setDisplayOrder($displayOrder) {
		$this->displayOrder = $displayOrder;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getStatmentType() {
		return $this->statmentType;
	}
	
	/**
	 *
	 * @param string $statmentType        	
	 */
	public function setStatmentType( $statmentType) {
		$this->statmentType = $statmentType;
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
	 * @return the string
	 */
	public function getAccountSign() {
		return $this->accountSign;
	}
	
	/**
	 *
	 * @param string $accountSign        	
	 */
	public function setAccountSign( $accountSign) {
		$this->accountSign = $accountSign;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getMandatory() {
		return $this->mandatory;
	}
	
	/**
	 *
	 * @param
	 *        	$mandatory
	 */
	public function setMandatory($mandatory) {
		$this->mandatory = $mandatory;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getAllowNegativeValue() {
		return $this->allowNegativeValue;
	}
	
	/**
	 *
	 * @param string $allowNegativeValue        	
	 */
	public function setAllowNegativeValue( $allowNegativeValue) {
		$this->allowNegativeValue = $allowNegativeValue;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getAllowZeroValue() {
		return $this->allowZeroValue;
	}
	
	/**
	 *
	 * @param string $allowZeroValue        	
	 */
	public function setAllowZeroValue( $allowZeroValue) {
		$this->allowZeroValue = $allowZeroValue;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getCheckshumSubaccounts() {
		return $this->checkshumSubaccounts;
	}
	
	/**
	 *
	 * @param string $checkshumSubaccounts        	
	 */
	public function setCheckshumSubaccounts( $checkshumSubaccounts) {
		$this->checkshumSubaccounts = $checkshumSubaccounts;
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
	public function getAnualize() {
		return $this->anualize;
	}
	
	/**
	 *
	 * @param string $anualize        	
	 */
	public function setAnualize( $anualize) {
		$this->anualize = $anualize;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getDisplay() {
		return $this->display;
	}
	
	/**
	 *
	 * @param string $display        	
	 */
	public function setDisplay( $display) {
		$this->display = $display;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getUnits() {
		return $this->units;
	}
	
	/**
	 *
	 * @param string $units        	
	 */
	public function setUnits( $units) {
		$this->units = $units;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getDisplayLocation() {
		return $this->displayLocation;
	}
	
	/**
	 *
	 * @param string $displayLocation        	
	 */
	public function setDisplayLocation( $displayLocation) {
		$this->displayLocation = $displayLocation;
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