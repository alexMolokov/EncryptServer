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
class SuccessResponse extends Response
{
    /**
     * @brief make SuccessResponse object from Response
     * @param array $response
     * @param string $description defauly "OK"
     * @return SuccessResponse
     */
    public  function __construct($response = [], $description = "OK")
    {
        parent::__construct(
            true,
            $response,
            $description
        );
    }


}