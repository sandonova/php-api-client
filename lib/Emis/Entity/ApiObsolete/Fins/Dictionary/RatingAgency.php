<?php
namespace Emis\Entity\Api\Fins\Dictionary;

/**
 * @author tgatev
 *
 */

class RatingAgency{
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $ratingAgencyCode;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $agencyName;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $agencyDescription;
	
	/**
	 * @serializable true
	 * @var \DateTime
	 */
	private $updatedOn;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $updatedBy;
	
	/**
	 * @serializable true
	 * @var \DateTime
	 */
	private $createdOn;
	
	/**
	 * @serializable true
	 * @var string
	 */
	private $createdBy;
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
	 * @return the string
	 */
	public function getRatingAgencyCode() {
		return $this->ratingAgencyCode;
	}
	
	/**
	 *
	 * @param string $ratingAgencyCode        	
	 */
	public function setRatingAgencyCode( $ratingAgencyCode) {
		$this->ratingAgencyCode = $ratingAgencyCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getAgencyName() {
		return $this->agencyName;
	}
	
	/**
	 *
	 * @param string $agencyName        	
	 */
	public function setAgencyName( $agencyName) {
		$this->agencyName = $agencyName;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getAgencyDescription() {
		return $this->agencyDescription;
	}
	
	/**
	 *
	 * @param string $agencyDescription        	
	 */
	public function setAgencyDescription( $agencyDescription) {
		$this->agencyDescription = $agencyDescription;
		return $this;
	}
	
	
}