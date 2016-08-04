<?php
namespace Emis\Exception;

class Exception extends \Exception
{
    const HTTP_CODE = 0;

    public function getHttpCode()
    {
        return self::HTTP_CODE;
    }
}
