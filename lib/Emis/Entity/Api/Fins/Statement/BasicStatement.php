<?php

namespace Emis\Entity\Api\Fins\Statement;

/**
 * Description of BasicStatement
 *
 * @author dsales
 */
class BasicStatement
{
    /**
     * @var int
     */
    private $stmtId = null;

    /**
     * @var int
     */
    private $isic = null;

    /**
     * @var string
     */
    private $period = null;

    /**
     * @var int
     */
    private $fsYear = null;

    /**
     * @var string
     */
    private $consolidatedStatus = null;

    /**
     * @var Date
     */
    private $lastUpdate = null;

    /**
    * @return int
    */
    public function getStmtId()
    {
        return $this->stmtId;
    }

    /**
    * @param int $stmtId
    * @return BasicStatement
    */
    public function setStmtId($stmtId)
    {
        $this->stmtId = $stmtId;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsic()
    {
        return $this->isic;
    }

    /**
     * @param int $isic
     * @return BasicStatement
     */
    public function setIsic($isic)
    {
        $this->isic = $isic;
        return $this;
    }

    /**
    * @return string
    */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
    * @param string $period
    * @return BasicStatement
    */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
    * @return int
    */
    public function getFsYear()
    {
        return $this->fsYear;
    }

    /**
    * @param int $fsYear
    * @return BasicStatement
    */
    public function setFsYear($fsYear)
    {
        $this->fsYear = $fsYear;
        return $this;
    }

    /**
    * @return string
    */
    public function getConsolidatedStatus()
    {
        return $this->consolidatedStatus;
    }

    /**
    * @param string $consolidatedStatus
    * @return BasicStatement
    */
    public function setConsolidatedStatus($consolidatedStatus)
    {
        $this->consolidatedStatus = $consolidatedStatus;
        return $this;
    }

    /**
    * @return Date
    */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
    * @param Date $lastUpdate
    * @return BasicStatement
    */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }

    /**
    * @return BasicStatementAccount[]
    */
    public function getAccountList()
    {
        return $this->accountList;
    }
}
