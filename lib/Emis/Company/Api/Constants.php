<?php
namespace Emis\Company\Api;
class Constants{
	
	// Search->queryComapny() constants 
	const SEARCH_DEFAULT_SERVICE       = 'API';
	const SEARCH_SERVICE_PROSPECT      = 'PROSPECT';
	
	const SEARCH_ORDER_BY_COMPANY_NAME = "name";
	const SEARCH_ORDER_BY_COMPANY_REVENUE = "revenue";
	const SEARCH_ORDER_BY_COMPANY_REVENUE_GROWTH = "revenue_growth";
	const SEARCH_ORDER_BY_COMPANY_ASSETS = "assets";
	const SEARCH_ORDER_BY_COMPANY_PROFIT = "profit";
	const SEARCH_ORDER_BY_COMPANY_EQUITY = "equity";
	const SEARCH_ORDER_BY_REGION = "region";
	const SEARCH_ORDER_BY_CITY = "city";
	
	
	const SEARCH_SORT_ORDER_ASC = "asc";
	const SEARCH_SORT_ORDER_DESC = "desc";
	
	const SEARCH_ORDER_LANG_EN = "en";
	const SEARCH_ORDER_LANG_LOCAL = "local";
	
	const SEARCH_ORDER_CURRENCY_USD = "usd";
	const SEARCH_ORDER_CURRENCY_EU = "eu";
	const SEARCH_ORDER_CURRENCY_LOCAL = "local";
}