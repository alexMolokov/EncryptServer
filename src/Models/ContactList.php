<?php
/**
 * Created by PhpStorm.
 * User: Анастасия
 * Date: 06.04.2018
 * Time: 9:33
 */

namespace EncryptServer\Models;

/**
 * @brief Work with user contact list
 */
class ContactList
{
    private $_list = array(
        "groupped" => [],
        "ungroupped" => []
    );

    /**
     * @brief Add login to contact list
     *
     * @param string $login
     * @param string|null $group
     * @return null
     */
    public function add($login, $group = null)
    {
        if(is_null($group))
        {
            $this->_list["ungroupped"][] = $login;
        }
        else
        {
            if(!isset($this->_list["groupped"][$group]))
            {
                $this->_list["groupped"][$group] = [];
            }
            $this->_list["groupped"][$group][] = $login;
        }
    }

    /**
     * @brief Get all user contact
     *
     * @return array
     */
    public function getAllUsers()
    {
        $ar = $this->_list["ungroupped"];
        foreach($this->_list["groupped"] as $group => $groupAr)
        {
            foreach($groupAr as $login) $ar[] = $login;
        }
        return $ar;
    }

    /*!
     *  @brief Get groups which has users
     *  @return array
     */
    public function getGroups()
    {
        return array_keys($this->_list["groupped"]);
    }

    /*!
     *  @brief Get group logins by group name
     *
     * @param $group string
     * @return array
     */
    public function getGroupUsers($group)
    {
       return (isset($this->_list["groupped"][$group]))? $this->_list["groupped"][$group] : [];
    }

}