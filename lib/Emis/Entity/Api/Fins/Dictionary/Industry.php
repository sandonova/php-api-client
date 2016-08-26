<?php

namespace Emis\Entity\Api\Fins\Dictionary;

class Industry{
	
	/**
	 * @serializable true
	 * @var string $searchTermsEng
	 */
	private $searchTermsEng;
	
	/**
	 * @serializable true
	 * @var string $searchTerms
	 */
	private $searchTerms;
	
	/**
	 * @serializable true
	 * @var string $docId
	 */
	private $docId;
	/**
	 * @serializable true
	 * @var string $prodCode
	 */
	private $prodCode;
	/**
	 * @serializable true
	 * @var string $titleEng
	 */
	private $titleEng;
	/**
	 * @serializable true
	 * @var string $isActive
	 */
	private $isActive;
	/**
	 * @serializable true
	 * @var string $naicsCode
	 */
	private $naicsCode;
	/**
	 * @serializable true
	 * @var string $title
	 */
	private $title;
	/**
	 * @serializable true
	 * @var string $langCode
	 */
	private $langCode;
	/**
	 * @serializable true
	 * @var string $createdBy
	 */
	private $createdBy;
	/**
	 * @serializable true
	 * @var \DateTime $createdOn
	 */
	private $createdOn;
	/**
	 * @serializable true
	 * @var string $updatedBy
	 */
	private $updatedBy;
	/**
	 * @serializable true
	 * @var \DateTime $updatedOn
	 */
	private $updatedOn;

	/**
	 *
	 * @return the string
	 */
	public function getSearchTermsEng() {
		return $this->searchTermsEng;
	}
	
	/**
	 *
	 * @param self $searchTermsEng        	
	 */
	public function setSearchTermsEng($searchTermsEng) {
		$this->searchTermsEng = $searchTermsEng;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getSearchTerms() {
		return $this->searchTerms;
	}
	
	/**
	 *
	 * @param self $searchTerms        	
	 */
	public function setSearchTerms($searchTerms) {
		$this->searchTerms = $searchTerms;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getDocId() {
		return $this->docId;
	}
	
	/**
	 *
	 * @param self $docId        	
	 */
	public function setDocId($docId) {
		$this->docId = $docId;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getProdCode() {
		return $this->prodCode;
	}
	
	/**
	 *
	 * @param self $prodCode        	
	 */
	public function setProdCode($prodCode) {
		$this->prodCode = $prodCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getTitleEng() {
		return $this->titleEng;
	}
	
	/**
	 *
	 * @param self $titleEng        	
	 */
	public function setTitleEng($titleEng) {
		$this->titleEng = $titleEng;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getIsActive() {
		return $this->isActive;
	}
	
	/**
	 *
	 * @param self $isActive        	
	 */
	public function setIsActive($isActive) {
		$this->isActive = $isActive;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getNaicsCode() {
		return $this->naicsCode;
	}
	
	/**
	 *
	 * @param self $naicsCode        	
	 */
	public function setNaicsCode($naicsCode) {
		$this->naicsCode = $naicsCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getTitle() {
		return $this->title;
	}
	
	/**
	 *
	 * @param self $title        	
	 */
	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getLangCode() {
		return $this->langCode;
	}
	
	/**
	 *
	 * @param self $langCode        	
	 */
	public function setLangCode($langCode) {
		$this->langCode = $langCode;
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
	 * @param self $createdBy        	
	 */
	public function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
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
	 * @param self $updatedBy        	
	 */
	public function setUpdatedBy($updatedBy) {
		$this->updatedBy = $updatedBy;
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
	
	


}
