<?php
namespace Emis\News\Api\Entity;

class File
{
    const LINK_URL_PARAMS = '?class=Search&method=getFile&key=';

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $format;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return File
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return File
     */
    public function setLink($link)
    {
        $this->link = $this->getApiUrl() . self::LINK_URL_PARAMS . $link;

        return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     * @return File
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    protected function unserializeRaw()
    {
        $data = $this->getRawData();
        $this->setLink($data->LINK)
            ->setTitle($data->TITL)
            ->setFormat($data->DTYP);
    }
}