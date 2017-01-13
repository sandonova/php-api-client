<?php

namespace Emis\Entity\Api\Fins\Statement;

/**
 * Description of StatementAccountExtended
 *
 * @author dsales
 */
class StatementAccountExtended extends StatementAccount
{
    /**
     * @var int
     */
    private $standardCode = null;

    /**
     * @var string
     */
    private $accountEnglishName = null;

    /**
     * @var int
     */
    private $displayOrder = null;

    /**
     * @var string
     */
    private $accountType = null;

    /**
    * @return int
    */
    public function getStandardCode()
    {
        return $this->standardCode;
    }

    /**
    * @param int $standardCode
    * @return StatementAccountExtended
    */
    public function setStandardCode($standardCode)
    {
        $this->standardCode = $standardCode;
        return $this;
    }

    /**
    * @return string
    */
    public function getAccountEnglishName()
    {
        return $this->accountEnglishName;
    }

    /**
    * @param string $accountEnglishName
    * @return StatementAccountExtended
    */
    public function setAccountEnglishName($accountEnglishName)
    {
        $this->accountEnglishName = $accountEnglishName;
        return $this;
    }

    /**
    * @return int
    */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }

    /**
    * @param int $displayOrder
    * @return StatementAccountExtended
    */
    public function setDisplayOrder($displayOrder)
    {
        $this->displayOrder = $displayOrder;
        return $this;
    }

    /**
    * @return string
    */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
    * @param string $accountType
    * @return StatementAccountExtended
    */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }
}
