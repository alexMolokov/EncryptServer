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
 * @brief Filter by LastName for search
 */
class LastNameFilter extends AbstractFilter
{
    /**
     * @param Vipadmin\get_user_list $cmd
     * @param string $value
     *
     * @brief add Filter Last Name
     */
    public function add(Vipadmin\get_user_list $cmd, $value)
    {
        $cmd->addFilter(Vipadmin\Filter::fromArray([
            'field' => Vipadmin\get_user_list\Field::FIELD_NAME3_VALUE,
            'filter_str' => $value
        ]));
    }
}