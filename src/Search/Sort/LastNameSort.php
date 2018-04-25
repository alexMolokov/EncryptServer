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
 * @brief Sort user by last name
 */
class LastNameSort
{
    /**
     * @param Vipadmin\get_user_list $cmd
     * @param $asc
     *
     * @brief Sort user by Last Name in order "asc"
     */
   public function add(Vipadmin\get_user_list $cmd, $asc)
   {
       $cmd->setSortField(Vipadmin\get_user_list\Field::FIELD_NAME3());
       parent::add($cmd, $asc);
   }
}