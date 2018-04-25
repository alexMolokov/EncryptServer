<?php
/**
 * Created by PhpStorm.
 * User: Анастасия
 * Date: 10.04.2018
 * Time: 9:53
 */

namespace EncryptServer\Response;

/**
 * @brief Success Response from server
 */
class ErrorResponse extends Response
{
    /**
     * @brief make ErrorResponse object from Response
     * @param array $response
     * @param string $description
     * @return ErrorResponse
     */
    public  function __construct($response = [], $description = "")
    {
        parent::__construct(
            false,
            $response,
            $description
        );
    }


}