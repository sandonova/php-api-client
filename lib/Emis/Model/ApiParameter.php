<?php
namespace Emis\Model;

class ApiParameter
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $type;

    /**
     * @var bool
     */
    private $isMandatory;

    /**
     * @var mixed
     */
    private $defaultValue;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ApiParameter
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return ApiParameter
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return ApiParameter
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMandatory()
    {
        return $this->isMandatory;
    }

    /**
     * @param boolean $isMandatory
     * @return ApiParameter
     */
    public function setIsMandatory($isMandatory)
    {
        $this->isMandatory = $isMandatory;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param mixed $defaultValue
     * @return ApiParameter
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }
}