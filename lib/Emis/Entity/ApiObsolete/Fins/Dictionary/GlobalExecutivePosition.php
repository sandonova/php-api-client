<?php

namespace Emis\Entity\Api\Fins\Dictionary;

class GlobalExecutivePosition{
	/**
	 * @serializable true
	 * @var string $globalPositionName
	 */
	private $globalPositionName;
	
	/**
	 * @serializable true
	 * @var string $globalPosition
	 */
	private $globalPosition;

	
	/**
	 *
	 * @return the string
	 */
	public function getGlobalPositionName() {
		return $this->globalPositionName;
	}
	
	/**
	 *
	 * @param self $globalPositionName        	
	 */
	public function setGlobalPositionName($globalPositionName) {
		$this->globalPositionName = $globalPositionName;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getGlobalPosition() {
		return $this->globalPosition;
	}
	
	/**
	 *
	 * @param self $globalPosition        	
	 */
	public function setGlobalPosition($globalPosition) {
		$this->globalPosition = $globalPosition;
		return $this;
	}
	
	
	
}
