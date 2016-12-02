<?php
namespace Emis\Http;

use Emis\Entity\Serializer;

class Client
{
    const CLIENT_TIMEOUT = 120;
    //const API_URL = 'https://api.emis.com/%s/%s/%s/?%s';
    const API_URL = 'https://sgorecki-emis-dev.emis.com/php/api/%s/?class=%s&method=%s&%s';
	
	const DOCUMENTS_API = 'news';
	const COMPANY_API = 'company';
    /**
     * @var string
     */
    private $token = null;

    /**
     * @var Serializer
     */
    private $serializer = null;

    private $apiUrl = self::API_URL;

    /**
     * @var resource
     */
    private $handler;
    
    /**
     *  @var string
     */
    private $api;
    

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

    /**
     * @return Serializer
     */
    public function getSerializer()
    {
        if (!$this->serializer) {
            $this->setSerializer(new Serializer());
        }

        return $this->serializer;
    }

    /**
     * @param Serializer $serializer
     * @return Client
     */
    public function setSerializer($serializer)
    {
        $this->serializer = $serializer;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiUrl()
    {
        return $this->apiUrl;
    }

    /**
     * @param string $apiUrl
     */
    public function setApiUrl($apiUrl)
    {
        $this->apiUrl = $apiUrl;
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
    public function request($class, $method, $params = array())
    {
    	if(!$this->getApi()){
    		throw new \Exception("There is no api specified. Pleace set api with Client->setApi(). ");
    	}
    	
        if ($this->getToken()) {
            $params['sessionId'] = $this->getToken();
        }

        foreach ($params as $key => $value) {
            if ($value instanceof \DateTime) {
                $params[$key] = $value->format(\DateTime::ISO8601);
            }
        }

        $url = sprintf($this->getApiUrl(), $this->getApi(), $class, $method, http_build_query($params));
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
            $object = $this->getSerializer()->unserialize($response);
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
            ),
        	$this->api
        );

        $this->setToken($result->sessionId);
    }

    public function getUserData()
    {
        $result = $this->request(
            'Auth',
            'getUserData'
        );

        return $result;
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
    
    /**
     * 
     * @param string $api
     * @throws \Exception
     */
    public function setApi($api){
    	if( 0 == strcmp($api, self::DOCUMENTS_API ) || 0 == strcmp($api, self::COMPANY_API )  ){
    		$this->api = $api;
    	}else{
    		throw new \Exception("Api should be one of: '". join('\', \'', array( self::DOCUMENTS_API , self::COMPANY_API ) )."'" );
    	}
    }
    
    /**
     * 
     * @return string
     */
    public function getApi(){
    	return $this->api;
    }
    
    
}