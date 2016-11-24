<?php

namespace Emis\Entity\Api\Fins\Services;

/**
 * Description of CompanyProspect
 *
 * @author dsales
 */
class CompanyProspect extends Emis\Entity\Api\Fins\Company\Company
{
    /**
     * @var string
     */
    private $companySizeCurrency = null;

    /**
     * @var number
     */
    private $companySizeAssets = null;

    /**
     * @var number
     */
    private $companySizeProfit = null;

    /**
     * @var number
     */
    private $companySizeEquity = null;

    /**
     * @var number
     */
    private $companySizeRevenueGrowth = null;

    /**
     * @var string
     */
    private $city = null;

    /**
     * @var string
     */
    private $cityLocal = null;

    /**
     * @var string
     */
    private $region = null;

    /**
     * @var string
     */
    private $regionLocal = null;

    /**
     * @var array
     */
    private $importCountryList = null;

    /**
     * @var array
     */
    private $exportCountryList = null;

    /**
     * @return string
     */
    public function getCompanySizeCurrency()
    {
        return $this->companySizeCurrency;
    }

    /**
     * @param string $companySizeCurrency
     * @return Company
     */
    public function setCompanySizeCurrency($companySizeCurrency)
    {
        $this->companySizeCurrency = $companySizeCurrency;
        return $this;
    }

    /**
     * @return number
     */
    public function getCompanySizeAssets()
    {
        return $this->companySizeAssets;
    }

    /**
     * @param number $companySizeAssets
     * @return Company
     */
    public function setCompanySizeAssets($companySizeAssets)
    {
        $this->companySizeAssets = $companySizeAssets;
        return $this;
    }

    /**
     * @return number
     */
    public function getCompanySizeProfit()
    {
        return $this->companySizeProfit;
    }

    /**
     * @param number $companySizeProfit
     * @return Company
     */
    public function setCompanySizeProfit($companySizeProfit)
    {
        $this->companySizeProfit = $companySizeProfit;
        return $this;
    }

    /**
     * @return number
     */
    public function getCompanySizeEquity()
    {
        return $this->companySizeEquity;
    }

    /**
     * @param number $companySizeEquity
     * @return Company
     */
    public function setCompanySizeEquity($companySizeEquity)
    {
        $this->companySizeEquity = $companySizeEquity;
        return $this;
    }

    /**
     * @return number
     */
    public function getCompanySizeRevenueGrowth()
    {
        return $this->companySizeRevenueGrowth;
    }

    /**
     * @param number $companySizeRevenueGrowth
     * @return Company
     */
    public function setCompanySizeRevenueGrowth($companySizeRevenueGrowth)
    {
        $this->companySizeRevenueGrowth = $companySizeRevenueGrowth;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Company
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityLocal()
    {
        return $this->cityLocal;
    }

    /**
     * @param string $cityLocal
     * @return Company
     */
    public function setCityLocal($cityLocal)
    {
        $this->cityLocal = $cityLocal;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return Company
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionLocal()
    {
        return $this->regionLocal;
    }

    /**
     * @param string $regionLocal
     * @return Company
     */
    public function setRegionLocal($regionLocal)
    {
        $this->regionLocal = $regionLocal;
        return $this;
    }

    /**
     * @return array
     */
    public function getImportCountryList()
    {
        return $this->importCountryList;
    }

    /**
     * @param array $importCountryList
     * @return Company
     */
    public function setImportCountryList($importCountryList)
    {
        $this->importCountryList = $importCountryList;
        return $this;
    }

    /**
     * @return array
     */
    public function getExportCountryList()
    {
        return $this->exportCountryList;
    }

    /**
     * @param array $exportCountryList
     * @return Company
     */
    public function setExportCountryList($exportCountryList)
    {
        $this->exportCountryList = $exportCountryList;
        return $this;
    }
}
