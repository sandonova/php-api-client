<?php
namespace Emis\Company\Api\Proxy\Base;

class Dictionary extends Base {
	
	
	/*
	 * 
	 */
	public function getCountryList(){
		return $this->getClient ()->request ( 'Dictionary', 'getCountryList' );
	}
	/**
	 */
	public function getCurrencyList(){
		return $this->getClient ()->request ( 'Dictionary', 'getCurrencyList' );
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getGlobalLegalFormList(){

		return $this->getClient ()->request ( 'Dictionary', 'getGlobalLegalFormList' );
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getLocalLegalFormList(){

		return $this->getClient ()->request ( 'Dictionary', 'getLocalLegalFormList' );
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	
	public function getLocalLegalFormByProductList($country){
		$params = $this->getClient ()->paramsAsArray ( $this, 'getLocalLegalFormByProductList', func_get_args () );
		
		return $this->getClient ()->request ( 'Dictionary', 'getLocalLegalFormByProductList', $params );
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getGlobalExecutivePositionList(){

		return $this->getClient ()->request ( 'Dictionary', 'getGlobalExecutivePositionList');
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getLocalExecutivePositionList(){

		return $this->getClient ()->request ( 'Dictionary', 'getLocalExecutivePositionList');
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getLocalExecutivePositionByProductList($country){
		$params = $this->getClient ()->paramsAsArray ( $this, 'getLocalExecutivePositionByProductList', func_get_args () );
		return $this->getClient ()->request ( 'Dictionary', 'getLocalExecutivePositionByProductList', $params );
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getIndustryList(){

		return $this->getClient ()->request ( 'Dictionary', 'getIndustryList' );
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getIndustryByProductList($country){
		$params = $this->getClient ()->paramsAsArray ( $this, 'getIndustryByProductList', func_get_args () );
		return $this->getClient ()->request ( 'Dictionary', 'getCurrencyList', $params );
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getExternalClassList(){

		return $this->getClient ()->request ( 'Dictionary', 'getExternalClassList');
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getCompanyTypeList(){

		return $this->getClient ()->request ( 'Dictionary', 'getCompanyTypeList');
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getOperationalStatusList(){

		return $this->getClient ()->request ( 'Dictionary', 'getOperationalStatusList');
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getStockExchangeList(){

		return $this->getClient ()->request ( 'Dictionary', 'getStockExchangeList');
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getMarketSegmentList(){

		return $this->getClient ()->request ( 'Dictionary', 'getMarketSegmentList');
	}
		
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getCityList( $offset = 0, $limit ){
		$params = $this->getClient ()->paramsAsArray ( $this, 'getCityList', func_get_args () );
		return $this->getClient ()->request ( 'Dictionary', 'getCityList', $params );
	}

	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getCityByRegionList($zoneCode){
		$params = $this->getClient ()->paramsAsArray ( $this, 'getCityByRegionList', func_get_args () );
		return $this->getClient ()->request ( 'Dictionary', 'getCityByRegionList', $params );
	}

	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */

	public function getRegionByProductList($country){
		$params = $this->getClient ()->paramsAsArray ( $this, 'getRegionByProductList', func_get_args () );
		return $this->getClient ()->request ( 'Dictionary', 'getRegionByProductList', $params );
	}	
	
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getRegionList(){

		return $this->getClient ()->request ( 'Dictionary', 'getRegionList');
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getOwnerTypeList(){

		return $this->getClient ()->request ( 'Dictionary', 'getOwnerTypeList');
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */

	public function getFinancialAuditorList(){
		
		return $this->getClient ()->request ( 'Dictionary', 'getFinancialAuditorList');
	}
	
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getRatingAgencyList(){

		return $this->getClient ()->request ( 'Dictionary', 'getRatingAgencyList');
	}
	
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getFinancialPeriodCodeList(){

		return $this->getClient ()->request ( 'Dictionary', 'getFinancialPeriodCodeList');
	}
	
	// Financials 
	
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getFinStandardBasicList($allowProductionOnly = 0 ){
		$params = $this->getClient ()->paramsAsArray ( $this, 'getFinStandardBasicList', func_get_args () );
		return $this->getClient ()->request ( 'Dictionary', 'getFinStandardBasicList', $params );
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getFinStandardAccountsByFinStdCodeList($stdCode){
		$params = $this->getClient ()->paramsAsArray ( $this, 'getFinStandardAccountsByFinStdCodeList', func_get_args () );
		return $this->getClient ()->request ( 'Dictionary', 'getFinStandardAccountsByFinStdCodeList', $params );
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getFinStandardByFinStdCode($stdCode, $allowProductionOnly = 0 ){
		$params = $this->getClient ()->paramsAsArray ( $this, 'getFinStandardByFinStdCode', func_get_args () );
		return $this->getClient ()->request ( 'Dictionary', 'getFinStandardByFinStdCode', $params ); 
	}
	/**
	 * @Authorization(type=AuthorizationType::AUTHENTICATED)
	 */
	public function getStdAccountsForSearch(){

		return $this->getClient ()->request ( 'Dictionary', 'getStdAccountsForSearch');
	}
	
}
