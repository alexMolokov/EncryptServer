<?php
namespace EncryptServer\Exceptions;

/**
 * @brief  Not Supported Version PHP
 * @details need to use 64bit version. For windows version start from 7.0
 */
class NotSupportedVersionException  extends \Exception
{
    /**
     * default message
     */
    protected $message = "Not supported PHP version";
}