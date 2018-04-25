<?php
namespace EncryptServer\Exceptions;

/**
 * @brief Failed Connect Exception. Can't connect to Server
 *
 */
class FailedConnectException  extends \Exception
{
    /**
     * Getaway timeout error
     */
    const HTTP_ERROR_GATEWAY_TIMEOUT = 504;

    /**
     * Message default
     */
    protected $message = "Failed to connect to server";
    /**
     * Code when can't connect
     */
    protected  $code = self::HTTP_ERROR_GATEWAY_TIMEOUT;
}