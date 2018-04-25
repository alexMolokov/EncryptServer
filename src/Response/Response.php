<?php
/**
 * Created by PhpStorm.
 * User: Анастасия
 * Date: 10.04.2018
 * Time: 9:43
 */

namespace EncryptServer\Response;

/**
 * @brief Response from server.
 *
 */
class Response
{
    /**
     * @var boolean $status
     * Status response true|false
     */
    protected $status;

    /**
     * @var array $response
     * Array with returned data
     */
    protected $response = [];

    /**
     * Description response
     *
     */
    protected $description = '';


    /**
     * @brief Response constructor.
     * @param boolean $status
     * @param array $response
     * @param string $description
     */
    public function __construct($status, $response, $description)
    {
        $this->response = $response;
        $this->status = $status;
        $this->description = $description;
    }

    /**
     * @return boolean
     * @brief return response status
     */
    public function getStatus(){
        return $this->status;
    }

    /**
     * @return array
     *  @brief return data
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return string
     * @brief return response description
     */
    public function getDescription()
    {
        return $this->description;
    }

}