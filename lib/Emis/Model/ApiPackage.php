<?php
namespace Emis\Model;

class ApiPackage
{
    /**
     * @var string
     */
    private $alias;

    /**
     * @var string
     */
    private $namespace;

    /**
     * @var ApiClass[]
     */
    private $classes;

    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     * @return ApiPackage
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
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
     * @return ApiPackage
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * @return ApiClass[]
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * @param ApiClass[] $classes
     * @return ApiPackage
     */
    public function setClasses($classes)
    {
        $this->classes = $classes;
        return $this;
    }
}
