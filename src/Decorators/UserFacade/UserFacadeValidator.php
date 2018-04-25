<?php
/**
 * Created by PhpStorm.
 * User: Анастасия
 * Date: 09.04.2018
 * Time: 16:30
 */

namespace EncryptServer\Decorators\UserFacade;

use Couchbase\Exception;
use EncryptServer\Exceptions;
use EncryptServer\Interfaces\IUserInterface;
use EncryptServer\Models;
use EncryptServer\Response\ErrorResponse;
use EncryptServer\Response\Response;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints;

/**
 * @brief Wrapper for User Facade. Validate params before send UserFacade
 */
class UserFacadeValidator extends AbstractUserFacade
{

    /**
     *  @brief Wrapper for IUserInterface
     */
    public function __construct(IUserInterface $obj)
    {
        parent::__construct($obj);
        $this->_validator = Validation::createValidator();
    }

    /**
     * @param Models\User $user
     * @return ErrorResponse|null
     *
     * @brief Validate Login and Password before send them to UserFacade
     */
    public function add(Models\User $user)
    {
        $result = $this->_validatePassword($user->getLogin());
        if(!is_null($result)) return $result;

        $result = $this->_validatePassword($user->getPassword());
        if(!is_null($result)) return $result;


        return $this->_obj->add($user);
    }

    /**
     * @param string $login
     * @param string $email
     * @return ErrorResponse|null
     *
     * @brief Validate Email before send it to UserFacade
     */
    public function setEmail($login, $email)
    {
        $result = $this->_validateEmail($email);
        if(!is_null($result)) return $result;

        return $this->_obj->setEmail($login, $email);
    }

    /**
     * @param string $login
     * @param string $password
     * @return ErrorResponse|null
     *
     * @brief Validate Password before send it to UserFacade
     */
    public function setPassword($login, $password)
    {
        $result = $this->_validatePassword($password);
        if(!is_null($result)) return $result;

        return $this->_obj->setPassword($login, $password);
    }


    /**
     * @param array $arConstrains
     * @param $value
     * @param $fieldName
     * @return ErrorResponse|null
     *
     * @brief Validate field
     */
    protected function _validate(array $arConstrains, $value, $fieldName)
    {
        $violations = $this->_validator->validate($value, $arConstrains);

        if (0 !== count($violations))
        {
            foreach ($violations as $violation)
            {
                return new ErrorResponse([$fieldName => $violation->getMessage()]);
            }
        }
    }

    /**
     * @param string $login
     * @return ErrorResponse | null
     *
     * @brief Validate Login.
     * @details Validate User Login. Lenght Login more 4 symbols and less 20.
     * Password can have only symbols a-zA-Z0-9_
     */
    protected function _validateLogin($login)
    {
        return $this->_validate([
            new Constraints\NotBlank(),
            new Constraints\Length(['min' => 4, "max" => 20]),
            new Constraints\Regex(["pattern" => '/^[a-zA-Z0-9_]{1,}$/i'])
        ], $login , "login");
    }

    /**
     * @param string $password
     * @return ErrorResponse | null
     *
     * @brief Validate Password.
     * @details Validate User Password. Lenght Password more 4 symbols and less 20.
     * Password can have only symbols a-zA-Z0-9_
     */
    protected function _validatePassword($password)
    {
        return $this->_validate([
            new Constraints\NotBlank(),
            new Constraints\Length(['min' => 4, "max" => 20]),
            new Constraints\Regex(["pattern" => '/^[a-zA-Z0-9_]{1,}$/i'])
        ], $password , "password");
    }

    /**
     * @param $email
     * @return ErrorResponse | null
     *
     * @brief Validate Email.
     * @details Validate if param can be email
     */
    protected function _validateEmail($email)
    {
        return $this->_validate([
            new Constraints\NotBlank(),
            new Constraints\Email()
        ], $email , "email");
    }
}