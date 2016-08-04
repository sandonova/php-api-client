<?php
namespace Emis\Exception;

class CoreException extends Exception
{
    const HTTP_CODE = 400;

    const API_METHOD_NOT_SPECIFIED = 3000;
    const REMOTE_CONSTRUCTOR_CALL = 3001;
    const PARAMETER_MISSING = 3002;
    const CLASS_SCHEMA_NOT_AVAILABLE = 3003;
}
