<?php
namespace Emis\Entity\Api\Fins\Dictionary\Customer;

/**
 * 
 * @author tgatev
 */
class City extends \Emis\Entity\Api\Fins\Dictionary\City {
	/**
	 * @serializable false
	 * @var \DateTime
	 */
	private $updatedOn;
	
	/**
	 * @serializable false
	 * @var string
	 */
	private $updatedBy;
	
	/**
	 * @serializable false
	 * @var \DateTime
	 */
	private $createdOn;
	
	/**
	 * @serializable false
	 * @var string
	 */
	private $createdBy;
	
	
}