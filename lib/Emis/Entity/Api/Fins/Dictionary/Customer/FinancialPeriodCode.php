<?php

namespace Emis\Entity\Api\Fins\Dictionary\Customer;


/**
 * 
 * 
 * @author tgatev
 *
 */
class FinancialPeriodCode extends \Emis\Entity\Api\Fins\Dictionary\FinancialPeriodCode{
	
	/**
	 * @serializable false
	 * @var string
	 */
	private $notes;
	/**
	 * @serializable false
	 * @var string
	 */
	private $fPeriodType;
	/**
	 * @serializable false
	 * @var string
	 */
	private $annualizeMultipler;
	/**
	 * @serializable false
	 * @var int
	 */
	private $periodRank;
	/**
	 * @serializable false
	 * @var int
	 */
	private $fPeriodGroup;
}