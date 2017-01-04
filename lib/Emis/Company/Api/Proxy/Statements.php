<?php
namespace Emis\Company\Api\Proxy;

class Statements extends Base {
  /**
   * @Authorization(type=AuthorizationType::AUTHENTICATED)
   * @param int $stmtid
   * @param string $currency
   * @param bool $extended
   */
  public function getStatementById($stmtid, $currency='usd', $extended=false)
  {
		$params = $this->getClient ()->paramsAsArray ( $this, 'getStatementById', func_get_args () );
		return $this->getClient ()->request ( 'Statements', 'getStatementById', $params );
  }

  /**
   * @Authorization(type=AuthorizationType::AUTHENTICATED)
   * @param array $stmtid
   * @param string $currency
   * @param bool $extended
   */
  public function getStatementsByIds($stmtid, $currency='usd', $extended=false)
  {
  	$params = $this->getClient ()->paramsAsArray ( $this, 'getStatementsByIds', func_get_args () );
  	return $this->getClient ()->request ( 'Statements', 'getStatementsByIds', $params );
  }
  /**
   * @Authorization(type=AuthorizationType::AUTHENTICATED)
   * @param int $isic
   * @param int $year
   * @param string $period
   * @param string $consolidated
   */
  public function getStatementByCode($isic, $year, $period, $consolidated, $currency='usd', $extended=false)
  {
		$params = $this->getClient ()->paramsAsArray ( $this, 'getStatementByCode', func_get_args () );
		return $this->getClient ()->request ( 'Statements', 'getStatementByCode', $params );
  }

  /**
   * @Authorization(type=AuthorizationType::AUTHENTICATED)
   * @param int $isic
   * @param string $period
   * @param Date $lastUpdate
   * @param boolean $extended
   */
  public function getCompanyStatements($isic, $period=null, $lastUpdate=null, $extended=false)
  {
		$params = $this->getClient ()->paramsAsArray ( $this, 'getCompanyStatements', func_get_args () );
		return $this->getClient ()->request ( 'Statements', 'getCompanyStatements', $params );
  }

  /**
   * @Authorization(type=AuthorizationType::AUTHENTICATED)
   * @param string $country
   * @param Date $lastUpdate
   * @param int $offset
   */
  public function getCompanyStatementsList($country=null, $isic=array(), $lastUpdate=null, $offset=0, $limit=null , $extended=false)
  {
		$params = $this->getClient ()->paramsAsArray ( $this, 'getCompanyStatementsList', func_get_args () );
		return $this->getClient ()->request ( 'Statements', 'getCompanyStatementsList', $params );
  }

  /**
   * @Authorization(type=AuthorizationType::AUTHENTICATED)
   * @param string $country
   * @param Date $lastUpdate
   * @param int $offset
   */
  public function getCompanyLatestStatement($isic, $period='Y')
  {
		$params = $this->getClient ()->paramsAsArray ( $this, 'getCompanyLatestStatement', func_get_args () );
		return $this->getClient ()->request ( 'Statements', 'getCompanyLatestStatement', $params );
  }
}
