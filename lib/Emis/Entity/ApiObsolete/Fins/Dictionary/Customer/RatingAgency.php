<?php
namespace Emis\Entity\Api\Fins\Dictionary\Customer;

/**
 * @author tgatev
 *
 */

class RatingAgency extends \Emis\Entity\Api\Fins\Dictionary\RatingAgency{
	

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