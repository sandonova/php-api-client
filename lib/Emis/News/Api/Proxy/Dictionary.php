<?php
namespace Emis\News\Api\Proxy;

use Emis\News\Api\Entity\Country;
use Emis\News\Api\Entity\Industry;
use Emis\News\Api\Entity\Language;
use Emis\News\Api\Entity\PublicationType;
use Emis\News\Api\Entity\SourceType;
use Emis\News\Api\Entity\Topic;

class Dictionary extends Base
{
    /**
     * @return \Emis\News\Api\Entity\Country[]
     * @throws \Exception
     */
    public function getCountries()
    {
        /* @var Country[] $result */
        $result = $this->getClient()->request('Dictionary', 'getCountries');

        return $result;
    }

    /**
     * @return \Emis\News\Api\Entity\Language[]
     * @throws \Exception
     */
    public function getLanguages()
    {
        /* @var Language[] $result */
        $result = $this->getClient()->request('Dictionary', 'getLanguages');

        return $result;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getFormats()
    {
        /* @var array $result */
        $result = $this->getClient()->request('Dictionary', 'getFormats');

        return $result;
    }

    /**
     * @return \Emis\News\Api\Entity\Industry[]
     * @throws \Exception
     */
    public function getIndustries()
    {
        /* @var Industry[] $result */
        $result = $this->getClient()->request('Dictionary', 'getIndustries');

        return $result;
    }

    /**
     * @return \Emis\News\Api\Entity\PublicationType[]
     * @throws \Exception
     */
    public function getPublicationTypes()
    {
        /* @var PublicationType[] $result */
        $result = $this->getClient()->request('Dictionary', 'getPublicationTypes');

        return $result;
    }

    /**
     * @return \Emis\News\Api\Entity\SourceType[]
     * @throws \Exception
     */
    public function getSourceTypes()
    {
        /* @var SourceType[] $result */
        $result = $this->getClient()->request('Dictionary', 'getSourceTypes');

        return $result;
    }

    /**
     * @return \Emis\News\Api\Entity\Topic[]
     * @throws \Exception
     */
    public function getTopics()
    {
        /* @var Topic[] $result */
        $result = $this->getClient()->request('Dictionary', 'getTopics');

        return $result;
    }
}