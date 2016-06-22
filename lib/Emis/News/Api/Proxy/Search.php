<?php
namespace Emis\News\Api\Proxy;

use Emis\Http\Client;
use Emis\News\Api\Entity\Result;
use Emis\News\Api\Entity\Search as SearchEntity;

class Search
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     * @return Search
     */
    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @Authorization(type=AuthorizationType::AUTHENTICATED)
     * @param array $countries
     * @param array $languages
     * @param array $formats
     * @param array $companies
     * @param array $industries
     * @param array $topics
     * @param array $sourceTypes
     * @param array $publications
     * @param array $publicationTypes
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @param string $term
     * @param string $scope
     * @param null $startDocumentId
     * @param int $offset
     * @param int $limit
     * @param string $order
     * @param bool $skipDuplicates
     * @param bool $includeBody
     * @return Result
     * @throws \Exception
     */
    public function query(
        $countries,
        $languages = array(),
        $formats = array(),
        $companies = array(),
        $industries = array(),
        $topics = array(),
        $sourceTypes = array(),
        $publications = array(),
        $publicationTypes = array(),
        \DateTime $startDate = null,
        \DateTime $endDate = null,
        $term = null,
        $scope = SearchEntity::SCOPE_EVERYWHERE,
        $startDocumentId = null,
        $offset = 0,
        $limit = 25,
        $order = SearchEntity::ORDER_NEWEST,
        $skipDuplicates = true,
        $includeBody = false
    )
    {
        $params = $this->getClient()->paramsAsArray($this, 'query', func_get_args());

        /* @var Result $result */
        $result = $this->getClient()->request('Search', 'query', $params);

        return $result;
    }

    /**
     * @param $ids
     * @return Result
     */
    public function getDocuments($ids)
    {
        $params = $this->getClient()->paramsAsArray($this, 'getDocuments', func_get_args());

        /* @var Result $result */
        $result = $this->getClient()->request('Search', 'getDocuments', $params);

        return $result;
    }

    /**
     * @param $key
     * @return array
     * @throws \Exception
     */
    public function getFile($key)
    {
        $params = $this->getClient()->paramsAsArray($this, 'getFile', func_get_args());
        $result = $this->getClient()->request('Search', 'getFile', $params);

        return $result;
    }
}