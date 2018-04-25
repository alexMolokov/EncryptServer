<?php
namespace EncryptServer\Interfaces;

use EncryptServer\Models;

/**
 * @brief An interface for work with Encrypt Server users
 */
interface IUserInterface
{
    /*!
     * @brief Add user
     *
     * @param Models\User $user
     * @return Response\\Response
    */
    public function add(Models\User $user);

    /*!
     * @brief  Block User by login
     *
     * @param string $login
     * @return Response\\Response
     */
   public function block($login);

    /*!
     * @brief Unblock User by login
     *
     * @param string $login
     * @return Response\\Response
     */
   public function unblock($login);

    /*!
     * @brief Get User profile by login
     *
     * @param string $login
     * @return Response\\Response
     */
    public function getUserProfile($login);


    /*!
     * @brief Set user profile data
     *
     * @param string $login
     * @param array $params
     * @return Response\\Response
     */
    public function setUserProfile($login, array $params);


    /*!
     * @brief  Find User by params
     *
     * @param array $filter
     * @param array $options
     * @return  @return Response\\Response
     */
   public function find(array $filter, array $options = []);

  /*!
  * @brief  Cet User Contact List by login
  *
  * @param string $login
  * @return Response\\Response
  */
   public function getContactList($login);

   /*!
   * @brief Set new password
   *
   * @param string $login
   * @param string $password
   * @return Response\\Response
   */
    public function setPassword($login, $password);


   /*!
   * @brief Set email for login
   *
   * @param string $login
   * @param string $email
   * @return Response\\Response
   */
   public function setEmail($login, $email);

   /*!
   * @brief Get Login by Email
    *
   * @param string $email
   * @return Response\\Response
   */
   public function getLoginByEmail($email);


}



