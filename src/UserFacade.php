<?php
namespace EncryptServer;

use EncryptServer\Interfaces;
use EncryptServer\Models;
use EncryptServer\Search;
use EncryptServer\Response\SuccessResponse;
use EncryptServer\Response\ErrorResponse;
use EncryptServer\Utils;
use EncryptServer\Protocol\Vipadmin;
use EncryptServer\Protocol\Vipadmin\auth_request_response\Status;

/**
 * @brief Facade for work with Server users. Use only this class
 *
 */
class UserFacade implements Interfaces\IUserInterface
{
    /**
     * key return at add command
     */
    const RESPONSE_LOGIN = "login";
    /**
     * key return at find
     */
    const RESPONSE_SEARCH_RESULT = "searchResult";
    /**
     * key return at getContactList
     */
    const RESPONSE_CONTACT_LIST = "contactList";
    /**
     * key return at getImage
     */
    const RESPONSE_IMAGE = "image";

    /**
     * Start page at find if it's not defined
     */
    const START_PAGE = 0;
    /**
     * Count records on page
     */
    const COUNT_ON_PAGE = 10;

    /**
     * @brief Interfaces\\IProtobufClient object
     */
    protected $_client;

    /**
     * UserFacade constructor.
     * @param Interfaces\IProtobufClient $client
     */
    public function __construct(Interfaces\IProtobufClient $client)
    {
        $this->_client = $client;
    }

    /**
     * @brief Add user to EncryptServer
     *
     *
     * @param Models\User $user
     * @return Response\\Response
     */
    public function add(Models\User $user)
    {

        $userCommand = Vipadmin\UserCommand::fromArray([
            'nickname' => $user->getNickname(),
            'email' => $user->getEmail(),
            'name1' => $user->getFirstName(),
            'name2' => $user->getMiddleName(),
            'name3' => $user->getLastName(),
            'password' => $this->_client->passwordHash($user->getLogin(), $user->getPassword()),
            'passwordHex' => $this->_client->passwordHashHex($user->getLogin(), $user->getPassword()),
            'blocked' => $user->isBlocked()
        ]);


        $add_user = Vipadmin\add_user::fromArray([
            'id' => $this->_client->getVipadminId(),
            'domain_id' => $this->_client->getDomain(),
            'login' => $user->getLogin(),
            'user' => $userCommand,
            "comments" => $user->getComments(),
            'security_template_id' => $user->getSecurityTemplateId(),
            "contactlist_template_id" =>  $user->getContactlistTemplateId(),
            "contactlist_dynamic_group" => $user->getContactlistDynamicGroup(),
            "user_pack_id" => $user->getSecurityDomain(),
            "lang" => $user->getLang()
        ]);

        foreach($user->getTags() as $tag) $add_user->addTags($tag);

        $this->_client->sendCmd($add_user);

        try {
            $response = $this->_client->readCmd('Vipadmin\\add_user_response');
            return  new SuccessResponse([self::RESPONSE_LOGIN => $response->getLogin()]);
        }
        catch (\Exception $e)
        {
            return new ErrorResponse([],$e->getMessage());
        }
    }


    /*!
     * @brief Find user by filter
     *
     * @details
     * <pre>
     *  for filter allows keys ["email", "login", "firstname", "lastname","nickname", "blocked"]
     *  where
     *  email - user email (string)
     *  login - user login (string)
     *  firstname - user firstname (string)
     *  "lastname" - user lastname (string)
     *  "nickname" - user nickname (string)
     *  "blocked" - user blocked or no (boolean)
     *  </pre>
     *
     * <pre>
     *  for options allows keys ["count", "page", "sort"]
     *  where
     *  "count" - count records (int)
     *  "page" - number page (int)
     *  "sort" - asc|desc (string)
     * </pre>
     *
     * @param array $filter
     * @param array $options allows keys ["count", "page", "sort"]
     * @return Response\\Response
     *
     * @include UserFacade/find.txt
     */
    public function find(array $filter, array $options = [])
    {
        if(!isset($options["page"]))  $options["page"] = self::START_PAGE;
        if(!isset($options["count"])) $options["count"] = self::COUNT_ON_PAGE;

        $CmdFind = Vipadmin\get_user_list::fromArray([
            'id' => $this->_client->getVipadminId(),
            'domain_id' => $this->_client->getDomain(),
            'fields_to_load' => [
                Vipadmin\get_user_list\Field::FIELD_LOGIN(),
                Vipadmin\get_user_list\Field::FIELD_NICKNAME(),
                Vipadmin\get_user_list\Field::FIELD_BLOCKED(),
                Vipadmin\get_user_list\Field::FIELD_NAME1(),
                Vipadmin\get_user_list\Field::FIELD_NAME2(),
                Vipadmin\get_user_list\Field::FIELD_NAME3(),
                Vipadmin\get_user_list\Field::FIELD_SECURITY_PARAMETERS()
            ],
        ]);

        foreach($filter as $filterName => $value)
        {
            $currentFilter = Search\Filters\AbstractFilter::getFilter($filterName);
            if(!is_null($currentFilter))
            {
                $currentFilter->add($CmdFind, $value);
            }
        }

        if(isset($options["sort"]))
        {
            $currentSort =  Search\Sort\AbstractSort::getSort($options["sort"]);

            if(!is_null($currentSort))
            {
                $currentSort->add($CmdFind, $options["asc"]);
            }
        }

        $CmdFind->setPageSize( $options["count"]);
        $CmdFind->setOffset($options["page"] * $options["count"]);

        $this->_client->sendCmd($CmdFind);

        try {
            $response = $this->_client->readCmd('Vipadmin\\get_user_list_response');

            $data = [];
            if ($users = $response->getUsersList()) {
                foreach ($users as $Msg) {
                    $ar = [
                        "id" => $Msg->getLogin() . '@' . $this->_client->getDomain(),
                        "login" => $Msg->getLogin(),
                        "securityDomain" => $Msg->getBusinessAccount(),
                        "blocked" => $Msg->getBlocked(),
                        "firstName" => $Msg->getName1(),
                        "middleName" => $Msg->getName2(),
                        "lastName" => $Msg->getName3(),
                        "nickName" => $Msg->getNickname(),
                        "email" => $Msg->getEmail() ?: '',
                        "lastLoginIp" => $Msg->getLastLoginIp(),
                        "lastLoginAt" => $Msg->getLastLoginTime(),
                        "createdAt" => $Msg->getCreated(),
                        "comments" => $Msg->getComments()
                    ];

                    if (($sec = $Msg->getSecurityParameters()) && ($sec = $sec->getPermissionsList())) {

                        foreach ($sec as $v) {
                            switch ($v->getId()) {
                                case 'can_change_password':
                                    $ar['canChangePassword'] = $v->getValueBool();
                                    break;
                                case 'limit_contactlist_to_business_account':
                                    $ar['sameSecurityDomainOnly'] = $v->getValueBool();
                                    break;
                            }
                        }
                    }
                    $data[] = $ar;
                }

            }

            $searchResult =  new Search\UserSearchResult([
                "data" => $data,
                "page" => $options["page"],
                "total" => (int)$response->getTotalCount()
            ]);

            return new SuccessResponse([self::RESPONSE_SEARCH_RESULT => $searchResult]);

        }
        catch (\Exception $e)
        {
            return new ErrorResponse([],$e->getMessage());
        }
    }

    /*!
     * @brief Get user ContactList
     *
     * @details Get user ContactList. Array of logins.
     *
     * @param string $login
     * @return Response\\Response
     *
     * @include UserFacade/getContactList.php
     */
    public function getContactList($login)
    {
        $contactList = new Models\ContactList();
        $getContacts = Vipadmin\get_user_contactlist::fromArray([
            'id' => $this->_client->getVipadminId(),
            'login' => $login,
            'domain_id' => $this->_client->getDomain()
        ]);
        $this->_client->sendCmd($getContacts);

        try {
            $response = $this->_client->readCmd('Vipadmin\\get_user_contactlist_response');
            if($response->hasGroupsList())
            {
                $iterator = $response->getGroupsList()->getIterator();
                while ($iterator->valid()) {
                    $group = $iterator->current();
                    $userIterator = $group->getUsersList()->getIterator();

                    while ($userIterator->valid()) {
                        $user = $userIterator->current();
                        $userIterator->next();
                        $vid = $user->getVid();
                        list($vLogin, $domain) = explode("@", $vid);
                        if ($vLogin) {
                            list($prefix, $login) = explode(":", $vid);
                            $contactList->add($login, $group->getId());
                        }
                    }
                    $iterator->next();
                }
            }
            if($response->hasUngrouppedUsersList())
            {
                $userIterator = $response->getUngrouppedUsersList()->getIterator();
                while($userIterator->valid())
                {
                    $user = $userIterator->current();
                    $userIterator->next();
                    $vid = $user->getVid();
                    list($vLogin,$domain) = explode ( "@" , $vid);
                    if($vLogin)
                    {
                        list($prefix,$login) = explode ( ":" , $vid);
                        $contactList->add($login);
                    }
                }
            }
            return  new SuccessResponse([self::RESPONSE_CONTACT_LIST =>  $contactList]);
        }
        catch (\Exception $e)
        {
            return new ErrorResponse([],$e->getMessage());
        }
    }


    /*!
   * @brief Get user profile by login
   *
   * @details Get User profile by login.
   * Return "email", "login", "nickname", "firstname", "middlename", "lastname"
   *
   * @param string $login
   * @return  Response\\Response
   *
   *  @include UserFacade/getUserProfile.php
   */
    public function getUserProfile($login)
    {
        $getUser = Vipadmin\get_user_profile::fromArray([
            'id' => $this->_client->getVipadminId(),
            'login' => $login,
            'domain_id' => $this->_client->getDomain()
        ]);

        $this->_client->sendCmd($getUser);

        try {
            $response = $this->_client->readCmd('Vipadmin\\get_user_profile_response');
            return  new SuccessResponse([
                "login" => $login,
                "email" => $response->getEmail(),
                "nickName" => $response->getNickname(),
                "firstName" => $response->getName1(),
                "middleName" => $response->getName2(),
                "lastName" => $response->getName3(),
                "blocked" => $response->getBlocked()
            ]);
        }
        catch (\Exception $e)
        {
            return new ErrorResponse([],$e->getMessage());
        }
    }

    /*!
     * @brief Get user icon by login
     *
     * @details Get user icon by login as base64 encoding
     *
     * @param string $login
     * @return Response\\Response
     *
     * @include UserFacade/getImage.php
     */
    public function getImage($login)
    {
        $getUser = Vipadmin\get_user_profile::fromArray([
            'id' => $this->_client->getVipadminId(),
            'login' => $login,
            'domain_id' => $this->_client->getDomain()
        ]);
        $this->_client->sendCmd($getUser);

        try {
            $response = $this->_client->readCmd('Vipadmin\\get_user_profile_response');
            return  new SuccessResponse([self::RESPONSE_IMAGE => $response->getImage()]);
        }
        catch (\Exception $e)
        {
            return new ErrorResponse([],$e->getMessage());
        }


    }

    /*!
    * @brief Update user profile data
     *
     * @details Update user profile data "nickname", "firstName", "lastName", "middleName" , "image"
     * You can save one or some fields.
     *
    * @param string $login
    * @param array $params
    * @return Response\\Response
     *
     * @include UserFacade/setUserProfile.php
    */
    public function setUserProfile($login, array $params)
    {
        $allowedKeys = ["nickName", "firstName", "lastName", "middleName" , "image"];
        $map = Models\User::getMapForSave();
        $ar = [];
        foreach($allowedKeys as $key)
        {
            if(key_exists($key,$params))
            {

                $saveKey = $map[$key];
                $ar[$saveKey] = $params[$key];
            }
        }


        if(count($ar) > 0)
        {
            $setUser = Vipadmin\save_user_profile::fromArray(array_merge([
                'id' => $this->_client->getVipadminId(),
                'login' => $login,
                'domain_id' => $this->_client->getDomain()
            ], $ar));

            $this->_client->sendCmd($setUser);

            try {
                $response = $this->_client->readCmd('Vipadmin\get_user_profile_response');
                return  new SuccessResponse();
            }
            catch (\Exception $e)
            {
                return new ErrorResponse([],$e->getMessage());
            }
        }

        return new ErrorResponse([],"Nothing to save");
    }

    /*!
     * @brief Get login by  email
     *
     *
     * @param string $email
     * @return Response\\Response
     *
     * @include UserFacade/getLoginByEmail.php
     */
    public function getLoginByEmail($email)
    {
        $response = $this->find(["email" => $email], ["count" => 1]);
        if($response->getStatus())
        {
            $data = $response->getResponse();
            $searchResult = $data[self::RESPONSE_SEARCH_RESULT];
            if($searchResult->getTotal() > 0)
            {
                $ar = [];
                while($searchResult->valid())
                {
                    $obj = $searchResult->current();
                    $ar["login"] = $obj["login"] ;
                    $searchResult->next();
                }
                return  new SuccessResponse($ar);
            }
            else
            {
                return new SuccessResponse();
            }
        }

        return $response;

    }
    /*!
      * @brief Set user email
     *
     * @param string $login
     * @param string $email
     * @return Response\\Response
     *
     * @include UserFacade/setEmail.php
     */
    public function setEmail($login, $email)
    {
        $result = $this->getLoginByEmail($email);
        if($result->getStatus())
        {
            $data = $result->getResponse();
            if(isset($data['login']) && $data['login'] != $login)  return  new ErrorResponse($data, "Email exists");
        }

        $setEmail = Vipadmin\save_extra_user_profile::fromArray([
            'id' => $this->_client->getVipadminId(),
            'login' => $login,
            'domain_id' => $this->_client->getDomain(),
            'email' => $email
        ]);
        $this->_client->sendCmd($setEmail);


        try {
            $response = $this->_client->readCmd('Vipadmin\save_extra_user_profile_response');
            return  new SuccessResponse();
        }
        catch (\Exception $e)
        {
            return new ErrorResponse([],$e->getMessage());
        }
    }

    /*!
     * @brief Block user login
     *
     * @param string $login string
     * @param boolean $block  default true
     * @return object Response\\Response
     *
     * @include  UserFacade/block.php
     */
    public function block($login, $block = true)
    {
         $Cmd = Vipadmin\save_user_security::fromArray([
             'id' => $this->_client->getVipadminId(),
             'domain_id' => $this->_client->getDomain(),
             'login' => $login,
             "block" => $block,
             "operation" => $this->_client->getExtraOp('EXTRA_OP_SECURTY_BLOCK')
         ]);

        $this->_client->sendCmd($Cmd);

        try {
            $response = $this->_client->readCmd('Vipadmin\save_user_security_response');
            return  new SuccessResponse();
        }
        catch (\Exception $e)
        {
            return new ErrorResponse([],$e->getMessage());
        }

    }

    /*!
     * @brief Unblock user
     *
     * @param string $login
     * @return object Response\\Response
     *
     */
    public function unblock($login)
    {
        return $this->block($login, false);
    }

    /*!
     * @brief Set user password
     *
     * @param string $login
     * @param string $password
     * @return object Response\\Response
     */
    public function setPassword($login, $password)
    {
      if(is_null($password))  return new ErrorResponse([],"Password must be not null");

      $Cmd = Vipadmin\save_user_security::fromArray([
          'id' => $this->_client->getVipadminId(),
          'domain_id' => $this->_client->getDomain(),
          'login' => $login,
          'operation' => $this->_client->getExtraOp('EXTRA_OP_SECURTY_PASSWORD')
      ]);
      $Cmd->addFields(Vipadmin\SecurityField::fromArray([
            'id' => 'password',
             'value_str' => $this->_client->passwordHash($login, $password)
      ]));
       $Cmd->addFields(Vipadmin\SecurityField::fromArray([
           'id' => 'password_hex',
           'value_str' => $this->_client->passwordHashHex($login, $password)
       ]));

        $this->_client->sendCmd($Cmd);

        try {
            $response = $this->_client->readCmd('Vipadmin\save_user_security_response');
            return  new SuccessResponse();
        }
        catch (\Exception $e)
        {
            return new ErrorResponse([],$e->getMessage());
        }
    }
}