<?php
namespace Emis\Model;

class ApiSpecification
{
    /**
     * @var string
     */
    private $link;

    /**
     * @var \Emis\Model\ApiPackage[]
     */
    private $packages;

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return ApiSpecification
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return \Emis\Model\ApiPackage[]
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * @param \Emis\Model\ApiPackage[] $packages
     * @return ApiSpecification
     */
    public function setPackages($packages)
    {
        $this->packages = $packages;
        return $this;
    }
}