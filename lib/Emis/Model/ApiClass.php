<?php
namespace Emis\Model;

class ApiClass
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $package;

    /**
     * @var string
     */
    private $namespace;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $link;

    /**
     * @var ApiMethod[]
     */
    private $methods = array();

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ApiClass
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param string $package
     * @return ApiClass
     */
    public function setPackage($package)
    {
        $this->package = $package;
        return $this;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param string $namespace
     * @return ApiClass
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
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
     * @return ApiClass
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
     * @return ApiClass
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return ApiMethod[]
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * @param ApiMethod $method
     * @return $this
     */
    public function addMethod(ApiMethod $method)
    {
        $this->methods[] = $method;
        return $this;
    }

    /**
     * @param ApiMethod[] $methods
     * @return ApiClass
     */
    public function setMethods($methods)
    {
        $this->methods = $methods;
        return $this;
    }
}
