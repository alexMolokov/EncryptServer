<?php
/**
 * Created by PhpStorm.
 * User: Анастасия
 * Date: 09.04.2018
 * Time: 12:59
 */

namespace  EncryptServer\Search\Filters;

use  EncryptServer\Protocol\Vipadmin;

/**
 * @brief Abstract filter for work for filters
 */
abstract class AbstractFilter
{
    /**
     * @brief Allowed Filters
     */
    private static $allowedFilters = array(
        "login" => "LoginFilter",
        "email" => "EmailFilter",
        "firstName" => "FirstNameFilter",
        "lastName" => "LastNameFilter",
        "blocked" => "BlockedFilter",
        "nickname" => "NickNameFilter"
    );

    /**
     * @param $filterName
     * @return AbstractFilter
     *
     * @brief factory to return concrete Filter
     */
    public static function getFilter($filterName)
    {
        if(isset(self:: $allowedFilters[$filterName]))
        {
            $className =  __NAMESPACE__ . "\\" . self::$allowedFilters[$filterName];
            return new $className();
        }
    }

    /**
     * @param Vipadmin\get_user_list $cmd
     * @param mixed $value
     * @return mixed
     *
     * @brief add Filter
     */
    abstract public function add(Vipadmin\get_user_list $cmd, $value);
}