<?php

namespace  EncryptServer\Search\Filters;
use  EncryptServer\Protocol\Vipadmin;

/**
 * @brief Filter by NickName for search
 */
class NickNameFilter extends AbstractFilter
{
    /**
     * @param Vipadmin\get_user_list $cmd
     * @param string $value
     *
     * @brief add Filter by NickName
     */
    public function add(Vipadmin\get_user_list $cmd, $value)
    {
        $cmd->addFilter(Vipadmin\Filter::fromArray([
            'field' => Vipadmin\get_user_list\Field::FIELD_NICKNAME_VALUE,
            'filter_str' => $value
        ]));
    }
}