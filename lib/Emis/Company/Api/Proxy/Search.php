<?php

namespace Emis\Company\Api\Proxy;


class Search extends Base {
	
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 * 
	 * @param string $filter        	
	 * @param boolean $extended        	
	 * @param int $offset        	
	 * @param int $Limit        	
	 */
	public function queryCompany($filter, $extended = false, $offset = 0, $limit = null) {
		$params = $this->getClient ()->paramsAsArray ( $this, 'queryCompany', func_get_args () );
		return $this->getClient ()->request ( 'Search', 'queryCompany', $params );
	}
	
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 * 
	 * @param string $filter        	
	 * @param boolean $extended        	
	 * @param int $offset        	
	 * @param int $Limit        	
	 */
	public function queryStatement($filter, $accountFilter = array(), $extended = false, $offset = 0, $limit = null) {
		$params = $this->getClient ()->paramsAsArray ( $this, 'queryStatement', func_get_args () );
		return $this->getClient ()->request ( 'Search', 'queryStatement', $params );
	}
}
