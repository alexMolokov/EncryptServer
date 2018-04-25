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
 * @brief Filter by Blocked for search
 */
class BlockedFilter extends AbstractFilter
{

    /**
     * @param Vipadmin\get_user_list $cmd
     * @param boolean $value
     *
     *  @brief add Filter Blocked
     */
    public function add(Vipadmin\get_user_list $cmd, $value)
    {
        $cmd->addFilter(Vipadmin\Filter::fromArray([
            'field' => Vipadmin\get_user_list\Field::FIELD_BLOCKED_VALUE,
            'filter_checked' => $value
        ]));
    }
}