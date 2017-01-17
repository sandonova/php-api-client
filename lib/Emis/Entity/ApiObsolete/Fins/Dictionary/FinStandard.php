<?php

namespace Emis\Entity\Api\Fins\Dictionary;

use \Emis\Entity\Api\Fins\Common\ResultList;

class FinStandard extends  \Emis\Entity\Api\Fins\Dictionary\FinStandardBasic {
	
	/**
	 * @serializable true
	 * @var \Emis\Entity\Api\Fins\Common\ResultList $accountsList
	 */
	
	private $accountsList;
	


	/**
	 * @return the ResultList
	 */
	public function getAccountsList() {
		return $this->accountsList;
	}
	
	/**
	 * @param  $accountsList
	 */
	public function setAccountsList( ResultList $accountsList) {
		$this->accountsList = $accountsList;
		return $this;
	}
	
}