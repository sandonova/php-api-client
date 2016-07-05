<?php
namespace Emis\Document\Api\Proxy;

use Emis\Entity\Api\Dictionary\Country;
use Emis\Entity\Api\Dictionary\Industry;
use Emis\Entity\Api\Dictionary\Language;
use Emis\Entity\Api\Dictionary\PublicationType;
use Emis\Entity\Api\Dictionary\SourceType;
use Emis\Entity\Api\Dictionary\Topic;

class Dictionary extends Base
{
    /**
     * @return \Emis\Entity\Api\Dictionary\Country[]
     * @throws \Exception
     */
    public function getCountries()
    {
        /* @var Country[] $result */
        $result = $this->getClient()->request('Dictionary', 'getCountries');

        return $result;
    }

    /**
     * @return \Emis\Entity\Api\Dictionary\Language[]
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
     * @return \Emis\Entity\Api\Dictionary\Industry[]
     * @throws \Exception
     */
    public function getIndustries()
    {
        /* @var Industry[] $result */
        $result = $this->getClient()->request('Dictionary', 'getIndustries');

        return $result;
    }

    /**
     * @return \Emis\Entity\Api\Dictionary\PublicationType[]
     * @throws \Exception
     */
    public function getPublicationTypes()
    {
        /* @var PublicationType[] $result */
        $result = $this->getClient()->request('Dictionary', 'getPublicationTypes');

        return $result;
    }

    /**
     * @return \Emis\Entity\Api\Dictionary\SourceType[]
     * @throws \Exception
     */
    public function getSourceTypes()
    {
        /* @var SourceType[] $result */
        $result = $this->getClient()->request('Dictionary', 'getSourceTypes');

        return $result;
    }

    /**
     * @return \Emis\Entity\Api\Dictionary\Topic[]
     * @throws \Exception
     */
    public function getTopics()
    {
        /* @var Topic[] $result */
        $result = $this->getClient()->request('Dictionary', 'getTopics');

        return $result;
    }

    /**
     * @return \Emis\Entity\Api\Dictionary\PublicationType[]
     * @throws \Exception
     */
    public function getUserPublicationTypes()
    {
        /* @var PublicationType[] $result */
        $result = $this->getClient()->request('Dictionary', 'getUserPublicationTypes');

        return $result;
    }

    /**
     * @return \Emis\Entity\Api\Dictionary\Country[]
     * @throws \Exception
     */
    public function getUserCountries()
    {
        /* @var Country[] $result */
        $result = $this->getClient()->request('Dictionary', 'getUserCountries');

        return $result;
    }
}