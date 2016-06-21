<?php
namespace Emis\News\Api\Entity;

class Industry
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getId()
    {
        return (int)$this->id;
    }

    /**
     * @param int $id
     * @return Industry
     */
    public function setId($id)
    {
        $this->id = (int)$id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Industry
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    protected function unserializeRaw()
    {
        $translate = \Zend_Registry::get('translate');
        $this->setId($this->getRawData());
        $this->setName($translate->_('INDU' . $this->getId()));
    }
}