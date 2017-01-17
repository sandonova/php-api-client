<?php
namespace Emis\Entity\Api\Fins\Dictionary\Customer;
/**
 *
 *
 * @author dsales
 *
 */

class SearchAccount extends \Emis\Entity\Api\Fins\Dictionary\SearchAccount{

	/**
	 * @serializable false
	 * @var int
	 */
	private $fstdCode;

	/**
	 * @serializable false
	 * @var string
	 */
	private $accountType;

}
