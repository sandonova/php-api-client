<?php
namespace Emis\Proxy;

use Emis\Http\Client;

class Base
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
     * Search constructor.
     * @param Client $client
     */
    public function __construct($client)
    {
        $this->setClient($client);
    }
}