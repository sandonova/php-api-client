<?php
namespace Emis\Entity\Api\Fins\Dictionary\Customer;

/**
 * 
 * @author tgatev
 *
 */
class Region extends \Emis\Entity\Api\Fins\Dictionary\Region{

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