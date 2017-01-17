<?php
namespace Emis\Model;

class ApiMethod
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $returnType;

    /**
     * @var int
     */
    private $authorizationType;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $link;

    /**
     * @var ApiParameter[]
     */
    private $parameters = array();

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ApiMethod
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnType()
    {
        return $this->returnType;
    }

    /**
     * @param string $returnType
     * @return ApiMethod
     */
    public function setReturnType($returnType)
    {
        $this->returnType = $returnType;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthorizationType()
    {
        return $this->authorizationType;
    }

    /**
     * @param int $authorizationType
     * @return ApiMethod
     */
    public function setAuthorizationType($authorizationType)
    {
        $this->authorizationType = $authorizationType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return ApiMethod
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return ApiMethod
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return ApiParameter[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param ApiParameter[] $parameters
     * @return ApiMethod
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * @param ApiParameter $parameter
     * @return $this
     */
    public function addParameter(ApiParameter $parameter)
    {
        $this->parameters[] = $parameter;
        return $this;
    }
}