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
 * @brief Sort user by Nick name
 */
class NickNameSort extends  AbstractSort
{
    /**
     * @param Vipadmin\get_user_list $cmd
     * @param $asc
     *
     * @brief Sort user by NickName in order "asc"
     */
   public function add(Vipadmin\get_user_list $cmd, $asc)
   {
       $cmd->setSortField(Vipadmin\get_user_list\Field::FIELD_NICKNAME());
       parent::add($cmd, $asc);
   }
}