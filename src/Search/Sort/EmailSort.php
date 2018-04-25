<?php
/**
 * Created by PhpStorm.
 * User: Анастасия
 * Date: 09.04.2018
 * Time: 13:27
 */
namespace  EncryptServer\Search\Sort;
use  EncryptServer\Protocol\Vipadmin;

/**
 * @brief Sort user by Email
 */
class EmailSort
{
    /**
     * @param Vipadmin\get_user_list $cmd
     * @param $asc
     *
     * @brief Sort user by email in order "asc"
     */
   public function add(Vipadmin\get_user_list $cmd, $asc)
   {
       $cmd->setSortField(Vipadmin\get_user_list\Field::FIELD_EMAIL());
       parent::add($cmd, $asc);
   }
}