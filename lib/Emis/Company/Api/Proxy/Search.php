<?php

namespace Emis\Company\Api\Proxy;


class Search extends Base {
	const SEARCH_DEFAULT_SERVICE       = 'API';
    const SEARCH_SERVICE_PROSPECT      = 'PROSPECT';
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 * 
	 * @param string $filter        	
	 * @param boolean $extended        	
	 * @param int $offset        	
	 * @param int $Limit        	
	 */
	public function queryCompany($filter, $extended = false, $offset = 0, $limit = null, $service = Self::SEARCH_DEFAULT_SERVICE) {
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
