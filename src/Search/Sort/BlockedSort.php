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
 * @brief Sort user by blocked
 */
class BlockedSort
{
    /**
     * @param Vipadmin\get_user_list $cmd
     * @param $asc
     * @return  null
     *
     * @brief Sort user by blocked or no on order "asc"
     */
   public function add(Vipadmin\get_user_list $cmd, $asc)
   {
       $cmd->setSortField(Vipadmin\get_user_list\Field::FIELD_BLOCKED());
       parent::add($cmd, $asc);
   }
}