<?php

namespace EncryptServer\Models;

/**
 * @brief Encrypt Server User
 *
  */
class User
{
    private $id;
    /**
     * User Login
     */
    private $login;
    /**
     * User Email
     */
    private $email = "";
    /**
     * User NickName
     */
    private $nickname = "";
    private $firstName = "";
    private $lastName = "";
    private $middleName = "";
    private $comments = "";
    private $tags = [];
    private $blocked = false;

    private $password;
    private $canChangePassword;

    private $confirmed;
    private $securityDomain;
    private $securityTemplateId = "";
    private $contactlistTemplateId = "";
    private $contactlistDynamicGroup = "";
    private $lang = "";

    private $lastLoginIp;
    private $lastLoginAt;
    private $createdAt;

    /**
     * @brief mapping Server user to User
     */
    protected static $_map = array(
        "id" => "id",
        "login" => "login",
        "email" => "email",
        "nickname" => "nickname",
        "name1" => "firstName",
        "name2" => "lastName",
        "name3" => "middleName",
        "contactList" => "contactList",
        "comments" => "comments",
        "tags" => "tags",
        "blocked" => "blocked",
        "canChangePassword" => "canChangePassword",
        "securityDomain" => "securityDomain",
        "lastLoginIp" => "lastLoginIp",
        "lastLoginAt" => "lastLoginAt",
        "createdAt" => "createdAt"
    );

    /**
     * @brief User constructor.
     * @param array $params
     * @details Make User from array. Allowed fields @see $_map
     */
    public function __construct(array $params)
    {
            foreach($params as $key => $param)
            {
                if(isset(self::$_map[$key]))
                {
                    $objKey = self::$_map[$key];
                    $this->{$objKey} = $param;
                }
            }
    }

    /**
     * @brief mapping User to Server User
     * @return array
     */
    public static function getMapForSave()
    {
        $ar = [];
        foreach(self::$_map as $key => $value)
        {
            $ar[$value] = $key;
        }
        return $ar;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getSecurityTemplateId()
    {
        return $this->securityTemplateId;
    }

    /**
     * @return string
     */
    public function getContactlistTemplateId()
    {
        return $this->contactlistTemplateId;
    }

    /**
     * @return string
     */
    public function getContactlistDynamicGroup()
    {
        return $this->contactlistDynamicGroup;
    }

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return bool
     */
    public function isBlocked()
    {
        return $this->blocked;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @return mixed
     */
    public function getSecurityDomain()
    {
        return $this->securityDomain;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }



}



