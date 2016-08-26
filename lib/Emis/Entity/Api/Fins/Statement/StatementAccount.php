<?php

namespace Emis\Entity\Api\Fins\Statement;

/**
 * Description of StatementAccount
 *
 * @author dsales
 */
class StatementAccount
{
    /**
     * @serializable false
     * @var int
     */
    private $stmtId = null;

    /**
     * @var string
     */
    private $accountCode = null;

    /**
     * @var float
     */
    private $accountValue = null;

    /**
    * @return int
    */    
    public function getStmtId() 
    {
        return $this->stmtId;
    }

    /**
    * @param int $stmtId
    * @return StatementAccount 
    */
    public function setStmtId($stmtId)
    {
        $this->stmtId = $stmtId;
        return $this;
    }

    /**
    * @return string
    */    
    public function getAccountCode() 
    {
        return $this->accountCode;
    }

    /**
    * @param string $accountCode
    * @return StatementAccount 
    */
    public function setAccountCode($accountCode)
    {
        $this->accountCode = $accountCode;
        return $this;
    }

    /**
    * @return float
    */    
    public function getAccountValue() 
    {
        return $this->accountValue;
    }

    /**
    * @param int $accountValue
    * @return StatementAccount 
    */
    public function setAccountValue($accountValue)
    {
        $this->accountValue = $accountValue;
        return $this;
    }
}
