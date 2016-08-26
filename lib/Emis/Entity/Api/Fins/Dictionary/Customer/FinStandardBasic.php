<?php

namespace Emis\Entity\Api\Fins\Dictionary\Customer;

/**
 *
 * @author tgatev
 *
 */
class FinStandardBasic extends \Emis\Entity\Api\Fins\Dictionary\FinStandardBasic {

	/**
	 * @serializable false
	 * @var string
	 */
	private $currencyCode;
	
	/**
	 * @serializable false
	 * @var int
	 */
	private $revisionId;

	/**
	 * @serializable false
	 * @var \DateTime $createdOn
	 */
	private $validSince;

	/**
	 * @serializable false
	 * @var \DateTime $createdOn
	 */
	private $validUntil;

	/**
	 * @serializable false
	 * @var string
	 */
	private $multiCurrency;

	/**
	 * @serializable false
	 * @var string
	 */
	private $isiEmployeeId;

	/**
	 * @serializable false
	 * @var string
	 */
	private $isiGlobal;

	/**
	 * @serializable false
	 * @var string
	 */
	private $isLocked;

	/**
	 * @serializable false
	 * @var string
	 */
	private $hideNonstdAccounts;

	/**
	 * @serializable false
	 * @var string
	 */
	private $displayOnEmis;
	
	/**
	 * @serializable false
	 * @var \DateTime $createdOn
	 */
	private $createdOn;
	/**
	 * @serializable false
	 * @var string $createdBy
	 */
	private $createdBy;
	/**
	 * @serializable false
	 * @var \DateTime $updatedOn
	 */
	private $updatedOn;
	/**
	 * @serializable false
	 * @var string $updatedBy
	 */
	private $updatedBy;
}