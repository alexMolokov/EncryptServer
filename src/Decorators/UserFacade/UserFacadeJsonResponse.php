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
use EncryptServer\Response\JsonResponse;
use EncryptServer\Response\Response;
use EncryptServer\Response\SuccessResponse;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints;

/**
 * @brief  Wrapper to User Facade to get Json Response to command
 */
class UserFacadeJsonResponse extends AbstractUserFacade
{

    /**
     * @brief Wrapper for IUserInterface
     */
    public function __construct(IUserInterface $obj)
    {
        parent::__construct($obj);
    }
    /**
     * @param Models\User $user
     * @return JsonResponse
     * @brief add wrapper
     */
    public function add(Models\User $user)
    {
        return JsonResponse::fromResponse($this->_obj->add($user));
    }
    /**
     * @param string $login
     * @param string $password
     * @return JsonResponse
     * @brief setPassword wrapper
     */
    public function setPassword($login, $password)
    {
        return JsonResponse::fromResponse($this->_obj->setPassword($login, $password));
    }

    /**
     * @param string $login
     * @param string $email
     * @return JsonResponse
     *
     * @brief setEmail wrapper
     */
    public function setEmail($login, $email)
    {
        return JsonResponse::fromResponse($this->_obj->setEmail($login, $email));
    }
    /**
     * @param string $login
     * @return JsonResponse
     * @brief block wrapper
     */
    public function block($login)
    {
        return JsonResponse::fromResponse($this->_obj->block($login));
    }

    /**
     * @param string $login
     * @return JsonResponse
     * @brief unblock wrapper
     */
    public function unblock($login)
    {
        return JsonResponse::fromResponse($this->_obj->unblock($login));
    }
    /**
     * @param string $login
     * @param array $params
     * @return JsonResponse
     * @brief setUserProfile wrapper
     */
    public function setUserProfile($login, array $params)
    {
        return JsonResponse::fromResponse($this->_obj->setUserProfile($login, $params));
    }
    /**
     * @param string $login
     * @return JsonResponse
     * @brief getUserProfile wrapper
     */
    public function getUserProfile($login)
    {
        return JsonResponse::fromResponse($this->_obj->getUserProfile($login));
    }

    /**
     * @param array $filter
     * @param array $options
     * @return JsonResponse
     * @brief find wrapper
     */
    public function find(array $filter, array $options = [])
    {
        $result = $this->_obj->find( $filter, $options);
        if(!$result->getStatus()) return JsonResponse::fromResponse($result);

        $data = $result->getResponse();

        if(isset($data["searchResult"]))
        {
            $searchResult = $data["searchResult"];
            $ar = [
                "total" => $searchResult->getTotal(),
                "page" => $searchResult->getPage(),
                "data" => []
            ];

            while ($searchResult->valid()) {
                $ar["data"][] = $searchResult->current();
                $searchResult->next();
            }
        }

        return JsonResponse::fromResponse(new SuccessResponse($ar));
    }

    /**
     * @param string $login
     * @brief  getContactList wrapper
     */
    public function getContactList($login)
    {
        $result = $this->_obj->getContactList($login);
        if(!$result->getStatus()) return JsonResponse::fromResponse($result);

        $data = $result->getResponse();
        return JsonResponse::fromResponse(new SuccessResponse($data['contactList']->getAllUsers()));
    }
}