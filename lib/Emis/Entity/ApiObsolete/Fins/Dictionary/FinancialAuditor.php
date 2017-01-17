<?php
namespace Emis\Entity\Api\Fins\Dictionary;

/**
 * @author tgatev
 *
 */
class FinancialAuditor{
	
	/**
	 * 
	 * @serializable true
	 * @var string
	 */
	private $financialAuditorCode;
	
	/**
	 *
	 * @serializable true
	 * @var string
	 */
	private $companyId;
	
	/**
	 *
	 * @serializable true
	 * @var string
	 */
	private $description;
	/**
	 *
	 * @serializable true
	 * @var string
	 */
	private $auditorName;
	

	
	/**
	 *
	 * @return the string
	 */
	public function getFinancialAuditorCode() {
		return $this->financialAuditorCode;
	}
	
	/**
	 *
	 * @param string $financialAuditorCode        	
	 */
	public function setFinancialAuditorCode( $financialAuditorCode) {
		$this->financialAuditorCode = $financialAuditorCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getCompanyId() {
		return $this->companyId;
	}
	
	/**
	 *
	 * @param string $companyId        	
	 */
	public function setCompanyId( $companyId) {
		$this->companyId = $companyId;
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
	public function getAuditorName() {
		return $this->auditorName;
	}
	
	/**
	 *
	 * @param string $auditorName        	
	 */
	public function setAuditorName( $auditorName) {
		$this->auditorName = $auditorName;
		return $this;
	}
	
		
}