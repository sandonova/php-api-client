<?php
namespace Emis\Http;

class Client
{
    const CLIENT_TIMEOUT = 120;
    const API_URL = 'https://api.emis.com/%s/%s/%s';
    const DEFAULT_API = 'news';

    /**
     * @var string
     */
    private $token = null;

    /**
     * @var resource
     */
    private $handler;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return Client
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    public function init()
    {
        $this->handler = curl_init();

        curl_setopt($this->handler, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->handler, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($this->handler, CURLOPT_AUTOREFERER, true);
        curl_setopt($this->handler, CURLOPT_TIMEOUT, self::CLIENT_TIMEOUT);
        curl_setopt($this->handler, CURLOPT_SSL_VERIFYPEER, false);
    }

    public function request($class, $method, $params = array(), $api = self::DEFAULT_API)
    {
        $url = sprintf(self::API_URL, $api, $class, $method);
        curl_setopt($this->handler, CURLOPT_URL, $url);

        $response = curl_exec($this->handler);
        $result = json_decode($response);

        if (!$result ) {
            throw new \Exception('Unexpected response.');
        }

        return $response;
    }
}