<?php
namespace Emis\Http;

use Emis\Entity\Serializer;

class Client
{
    const CLIENT_TIMEOUT = 120;
    const API_URL = 'https://api.emis.com/%s/%s/%s/?%s';
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

    public function __construct()
    {
        $this->init();
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

    /**
     * @param string $class
     * @param string $method
     * @param array $params
     * @param string $api
     * @return array
     * @throws \Exception
     */
    public function request($class, $method, $params = array(), $api = self::DEFAULT_API)
    {
        if ($this->getToken()) {
            $params['sessionId'] = $this->getToken();
        }

        $url = sprintf(self::API_URL, $api, $class, $method, http_build_query($params));
        curl_setopt($this->handler, CURLOPT_URL, $url);

        $response = curl_exec($this->handler);
        $result = json_decode($response);

        if (!$result) {
            throw new \Exception('Unexpected response.');
        }

        if (isset($result->errors)) {
            throw new \Exception($result->errors[0]->detail, $result->errors[0]->code);
        }

        if (isset($result->data->_type) || (is_array($result->data) && count($result->data) && $result->data[0]->_type)) {
            $serializer = new Serializer();
            $object = $serializer->unserialize($response);
            return $object;
        }

        return $result->data;
    }

    /**
     * @param string $username
     * @param string $password
     * @throws \Exception
     */
    public function login($username, $password)
    {
        $result = $this->request(
            'Auth',
            'login',
            array(
                'username' => $username,
                'password' => $password
            )
        );

        $this->setToken($result->sessionId);
    }

    /**
     * @throws \Exception
     */
    public function logout()
    {
        $this->request('Auth', 'logout');
    }

    /**
     * @param object|string $class
     * @param string $method
     * @param array $values
     * @return array
     */
    public function paramsAsArray($class, $method, $values)
    {
        $ref = new \ReflectionMethod($class, $method);
        $index = 0;
        $params = array();

        foreach ($ref->getParameters() as $param) {
            $params[$param->getName()] = $values[$index];
            $index++;

            if ($index >= count($values)) {
                break;
            }
        }

        return $params;
    }
}