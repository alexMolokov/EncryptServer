<?php
namespace  EncryptServer\Search\Filters;

use  EncryptServer\Protocol\Vipadmin;

/**
 * @brief Filter by Login for search
 */
class LoginFilter extends AbstractFilter
{
    /**
     * @param Vipadmin\get_user_list $cmd
     * @param string $value
     * @return null
     *
     * @brief add Filter by Login
     */
    public function add(Vipadmin\get_user_list $cmd, $value)
    {
        $cmd->addFilter(Vipadmin\Filter::fromArray([
            'field' => Vipadmin\get_user_list\Field::FIELD_LOGIN_VALUE,
            'filter_str' => $value
        ]));
    }
}