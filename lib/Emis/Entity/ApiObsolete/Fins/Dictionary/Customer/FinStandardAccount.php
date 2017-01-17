<?php
namespace Emis\Entity\Api\Fins\Dictionary\Customer;
/**
 * 
 * 
 * @author tgatev
 *
 */

class FinStandardAccount extends \Emis\Entity\Api\Fins\Dictionary\FinStandardAccount{

	/**
	 * @serializable false
	 * @var int 
	 */
	private $mandatory;

	/**
	 * @serializable false
	 * @var string 
	 */
	private $allowNegativeValue;

	/**
	 * @serializable false
	 * @var string 
	 */
	private $allowZeroValue;

	/**
	 * @serializable false
	 * @var string 
	 */
	private $checkshumSubaccounts;

	/**
	 * @serializable false
	 * @var string 
	 */
	private $notes;

	/**
	 * @serializable false
	 * @var string 
	 */
	private $anualize;

	/**
	 * @serializable false
	 * @var string 
	 */
	private $display;

	/**
	 * @serializable false
	 * @var string 
	 */
	private $units;

	/**
	 * @serializable false
	 * @var string 
	 */
	private $displayLocation;

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