<?php
namespace Emis\Entity\Api\Fins\Dictionary\Customer;

/**
 * @author tgatev
 *
 */
class StockExchange extends \Emis\Entity\Api\Fins\Dictionary\StockExchange{
	
	/**
	 * @serializable false
	 * @var string $createdOn
	 */
	private $createdOn;
	/**
	 * @serializable false
	 * @var string $createdBy
	 */
	private $createdBy;
	/**
	 * @serializable false
	 * @var string $updatedOn
	 */
	private $updatedOn;
	/**
	 * @serializable false
	 * @var string $updatedBy
	 */
	private $updatedBy;
	
}