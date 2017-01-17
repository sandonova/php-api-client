<?php
namespace Emis\Entity\Api\Fins\Dictionary;
/**
 *
 *
 * @author dsales
 *
 */

class SearchAccount{

	/**
	 * @serializable true
	 * @var int
	 */
	private $fstdCode;

	/**
	 * @serializable true
	 * @var string
	 */
	private $accountCode;

	/**
	 * @serializable true
	 * @var string
	 */
	private $accountName;

	/**
	 * @serializable true
	 * @var string
	 */
	private $accountType;

	/**
	 *
	 * @return int
	 */
	public function getFstdCode() {
		return $this->fstdCode;
	}

	/**
	 *
	 * @param int $fstdCode
	 */
	public function setFstdCode($fstdCode) {
		$this->fstdCode = $fstdCode;
		return $this;
	}

	/**
	 *
	 * @return string
	 */
	public function getAccountCode() {
		return $this->accountCode;
	}

	/**
	 *
	 * @param string $accountCode
	 */
	public function setAccountCode( $accountCode) {
		$this->accountCode = $accountCode;
		return $this;
	}

	/**
	 *
	 * @return string
	 */
	public function getAccountName() {
		return $this->accountName;
	}

	/**
	 *
	 * @param string $accountName
	 */
	public function setAccountName( $accountName) {
		$this->accountName = $accountName;
		return $this;
	}

	/**
	 *
	 * @return string
	 */
	public function getAccountType() {
		return $this->accountType;
	}

	/**
	 *
	 * @param string $accountType
	 */
	public function setAccountType( $accountType) {
		$this->accountType = $accountType;
		return $this;
	}

}
