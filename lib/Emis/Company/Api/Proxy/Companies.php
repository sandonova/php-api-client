<?php

namespace Emis\Company\Api\Proxy;



class Companies extends Base {
	
	/**
	 *
	 * @param int $isic        	
	 */
	public function getCompany($isic) {
		$params = $this->getClient ()->paramsAsArray ( $this, 'getCompany', func_get_args () );
		
		$result = $this->getClient ()->request ( 'Companies', 'getCompany', $params );
		
		return $result;
	}
	
	/**
	 *
	 * @param int $isic        	
	 * @param array $section        	
	 */
	public function getFullCompany($isic, $section = array()) {
		$params = $this->getClient ()->paramsAsArray ( $this, 'getFullCompany', func_get_args () );
		
		$result = $this->getClient ()->request ( 'Companies', 'getFullCompany', $params );
		
		return $result;
	}
	
	/**
	 *
	 * @param string $country        	
	 * @param Date $lastUpdate        	
	 * @param int $offset        	
	 */
	public function getCompanyList($country, $lastUpdate = null, $offset = 0, $limit) {
		$params = $this->getClient ()->paramsAsArray ( $this, 'getCompanyList', func_get_args () );
		
		$result = $this->getClient ()->request ( 'Companies', 'getCompanyList', $params );
		
		return $result;
	}
	
	/**
	 *
	 * @param string $country        	
	 * @param Date $lastUpdate        	
	 * @param int $offset        	
	 */
	public function getCompanyIdMap($country, $lastUpdate = null, $offset = 0, $limit) {
		$params = $this->getClient ()->paramsAsArray ( $this, 'getCompanyIdMap', func_get_args () );
		
		$result = $this->getClient ()->request ( 'Companies', 'getCompanyIdMap', $params );
		
		return $result;
	}
}
