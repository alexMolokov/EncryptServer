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
 * @brief Class AbstractSort. Sort user by...
 *
 */
abstract class AbstractSort
{
    private static $allowedSorts = array(
        "login" => "LoginSort",
        "blocked" => "BlockedSort",
        "email" => "EmailSort",
        "firstName" => "FirstNameSort",
        "lastName" => "LastNameSort",
        "nickname" => "NickNameSort"
    );

    /**
     * @param $filterName
     * @return AbstractSort
     *
     * @brief factory for objects Sort
     */
    public static function getSort($filterName)
    {
        if(isset(self::$allowedSorts[$filterName]))
        {
            $className = __NAMESPACE__ . "\\" . self::$allowedSorts[$filterName];
            return new $className();
        }
    }


    /**
     * @param Vipadmin\get_user_list $cmd
     * @param $asc
     *
     * @brief Sort in order
     */
    public function add(Vipadmin\get_user_list $cmd, $asc)
    {
        if(!$asc) $cmd->setSortDesc(true);
    }
}