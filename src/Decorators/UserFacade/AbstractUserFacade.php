<?php
/**
 * Created by PhpStorm.
 * User: Анастасия
 * Date: 09.04.2018
 * Time: 16:25
 */

namespace EncryptServer\Decorators\UserFacade;

use EncryptServer\Interfaces\IUserInterface;

/**
 * @brief Class AbstractUserFacade. Decorator for IUserInterface
 */
abstract class AbstractUserFacade implements IUserInterface
{
    /**
     * @brief IUserInterface object
     */
    protected $_obj;

    /**
     * @brief AbstractUserFacade constructor.
     * @param IUserInterface $obj
     */
    public function __construct( IUserInterface $obj)
    {
       $this->_obj = $obj;
    }

    /**
     * @param string $login
     * @brief block wrapper
     */
    public function block($login)
    {
        return $this->_obj->block($login);
    }

    /**
     * @param string $login
     * @brief unblock wrapper
     */
    public function unblock($login)
    {
        return  $this->_obj->unblock($login);
    }

    /**
     * @param string $login
     * @param array $params
     * @brief setUserProfile wrapper
     */
    public function setUserProfile($login, array $params)
    {
        return  $this->_obj->setUserProfile($login, $params);
    }
    /**
     * @param string $login
     * @brief getUserProfile wrapper
     */
    public function getUserProfile($login)
    {
        return $this->_obj->getUserProfile($login);
    }

    /**
     * @param array $filter
     * @param array $options
     * @brief find wrapper
     */
    public function find(array $filter, array $options = [])
    {
        return $this->_obj->find($filter, $options);
    }

    /**
     * @param string $login
     * @brief  getContactList wrapper
     */
    public function getContactList($login)
    {
        return $this->_obj->getContactList($login);
    }

    /**
     * @param string $email
     * @brief  getLoginByEmail wrapper
     */
    public function getLoginByEmail($email)
    {
        return $this->_obj->getLoginByEmail($email);
    }
}

