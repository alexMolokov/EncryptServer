<?php
namespace EncryptServer\Exceptions;

use Throwable;

/**
 * @brief Invalid ArgumentException
 */
class InvalidArgumentException  extends \Exception
{
    /**
     * default message
     */
    protected $message = "Invalid argument";
    /**
     * firld name where exception happened
     */
    protected $field;

    /**
     * @brief InvalidArgumentException constructor.
     * @param string $field
     * @param string $message
     */
    public function __construct($field,$message = "")
    {
        $this->field = $field;
        parent::__construct($message);
    }

    /**
     * @brief Get field where exception happened
     * @return string
     */
    public function getField(){
        return $this->field;
    }
}