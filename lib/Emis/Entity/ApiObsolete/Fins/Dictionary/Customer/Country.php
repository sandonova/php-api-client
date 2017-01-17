<?php
namespace Emis\Entity\Api\Fins\Dictionary\Customer;

/**
 * @author tgatev
 *
 */
class Country extends \Emis\Entity\Api\Fins\Dictionary\Country{

	/**
	 * @serializable false
	 * @var float
	 */
	private $taxRate;
	/**
	 * @serializable false
	 * @var string
	 */
	private $csIsiOffice;
	/**
	 * @serializable false
	 * @var string
	 */
	private $langCode;
	/**
	 * @serializable false
	 * @var string 
	 */
	private $findbYN;

	/**
	 * @serializable false
	 * @var string
	 */
	private $salesIsiOffice;
	
	/**
	 * @serializable false
	 * @var string
	 */
	private $gmt;
	
}