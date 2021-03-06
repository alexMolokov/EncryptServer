<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin\get_user_list;

/**
 * Protobuf enum : EncryptServer.Protocol.Vipadmin.get_user_list.Field
 */
class Field extends \Protobuf\Enum
{

    /**
     * FIELD_LOGIN = 1
     */
    const FIELD_LOGIN_VALUE = 1;

    /**
     * FIELD_NICKNAME = 2
     */
    const FIELD_NICKNAME_VALUE = 2;

    /**
     * FIELD_LAST_LOGIN_TIME = 3
     */
    const FIELD_LAST_LOGIN_TIME_VALUE = 3;

    /**
     * FIELD_CREATED = 4
     */
    const FIELD_CREATED_VALUE = 4;

    /**
     * FIELD_BLOCKED = 5
     */
    const FIELD_BLOCKED_VALUE = 5;

    /**
     * FIELD_BA_BLOCKED = 6
     */
    const FIELD_BA_BLOCKED_VALUE = 6;

    /**
     * FIELD_INITIALIZED = 7
     */
    const FIELD_INITIALIZED_VALUE = 7;

    /**
     * FIELD_EVENTS_COUNT = 8
     */
    const FIELD_EVENTS_COUNT_VALUE = 8;

    /**
     * FIELD_FILE_SIZE = 9
     */
    const FIELD_FILE_SIZE_VALUE = 9;

    /**
     * FIELD_ONLINE_MODE = 10
     */
    const FIELD_ONLINE_MODE_VALUE = 10;

    /**
     * FIELD_BALANCE = 12
     */
    const FIELD_BALANCE_VALUE = 12;

    /**
     * FIELD_LAST_LOGIN_IP = 13
     */
    const FIELD_LAST_LOGIN_IP_VALUE = 13;

    /**
     * FIELD_TARIFF = 14
     */
    const FIELD_TARIFF_VALUE = 14;

    /**
     * FIELD_DESIRED_LOGIN = 15
     */
    const FIELD_DESIRED_LOGIN_VALUE = 15;

    /**
     * FIELD_EMAIL = 16
     */
    const FIELD_EMAIL_VALUE = 16;

    /**
     * FIELD_COMMENTS = 17
     */
    const FIELD_COMMENTS_VALUE = 17;

    /**
     * FIELD_TAGS = 18
     */
    const FIELD_TAGS_VALUE = 18;

    /**
     * FIELD_USER_PACK_ID = 19
     */
    const FIELD_USER_PACK_ID_VALUE = 19;

    /**
     * FIELD_SIP_REGISTRATION = 20
     */
    const FIELD_SIP_REGISTRATION_VALUE = 20;

    /**
     * FIELD_SIP_LOGIN = 21
     */
    const FIELD_SIP_LOGIN_VALUE = 21;

    /**
     * FIELD_BA_BALANCE_LIMIT = 22
     */
    const FIELD_BA_BALANCE_LIMIT_VALUE = 22;

    /**
     * FIELD_BA_BALANCE_USED = 23
     */
    const FIELD_BA_BALANCE_USED_VALUE = 23;

    /**
     * FIELD_BUSINESS_ACCOUNT = 24
     */
    const FIELD_BUSINESS_ACCOUNT_VALUE = 24;

    /**
     * FIELD_NAME1 = 25
     */
    const FIELD_NAME1_VALUE = 25;

    /**
     * FIELD_NAME2 = 26
     */
    const FIELD_NAME2_VALUE = 26;

    /**
     * FIELD_NAME3 = 27
     */
    const FIELD_NAME3_VALUE = 27;

    /**
     * FIELD_SECURITY_PARAMETERS = 28
     */
    const FIELD_SECURITY_PARAMETERS_VALUE = 28;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_LOGIN = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_NICKNAME = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_LAST_LOGIN_TIME = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_CREATED = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_BLOCKED = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_BA_BLOCKED = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_INITIALIZED = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_EVENTS_COUNT = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_FILE_SIZE = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_ONLINE_MODE = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_BALANCE = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_LAST_LOGIN_IP = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_TARIFF = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_DESIRED_LOGIN = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_EMAIL = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_COMMENTS = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_TAGS = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_USER_PACK_ID = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_SIP_REGISTRATION = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_SIP_LOGIN = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_BA_BALANCE_LIMIT = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_BA_BALANCE_USED = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_BUSINESS_ACCOUNT = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_NAME1 = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_NAME2 = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_NAME3 = null;

    /**
     * @var \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    protected static $FIELD_SECURITY_PARAMETERS = null;

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_LOGIN()
    {
        if (self::$FIELD_LOGIN !== null) {
            return self::$FIELD_LOGIN;
        }

        return self::$FIELD_LOGIN = new self('FIELD_LOGIN', self::FIELD_LOGIN_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_NICKNAME()
    {
        if (self::$FIELD_NICKNAME !== null) {
            return self::$FIELD_NICKNAME;
        }

        return self::$FIELD_NICKNAME = new self('FIELD_NICKNAME', self::FIELD_NICKNAME_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_LAST_LOGIN_TIME()
    {
        if (self::$FIELD_LAST_LOGIN_TIME !== null) {
            return self::$FIELD_LAST_LOGIN_TIME;
        }

        return self::$FIELD_LAST_LOGIN_TIME = new self('FIELD_LAST_LOGIN_TIME', self::FIELD_LAST_LOGIN_TIME_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_CREATED()
    {
        if (self::$FIELD_CREATED !== null) {
            return self::$FIELD_CREATED;
        }

        return self::$FIELD_CREATED = new self('FIELD_CREATED', self::FIELD_CREATED_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_BLOCKED()
    {
        if (self::$FIELD_BLOCKED !== null) {
            return self::$FIELD_BLOCKED;
        }

        return self::$FIELD_BLOCKED = new self('FIELD_BLOCKED', self::FIELD_BLOCKED_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_BA_BLOCKED()
    {
        if (self::$FIELD_BA_BLOCKED !== null) {
            return self::$FIELD_BA_BLOCKED;
        }

        return self::$FIELD_BA_BLOCKED = new self('FIELD_BA_BLOCKED', self::FIELD_BA_BLOCKED_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_INITIALIZED()
    {
        if (self::$FIELD_INITIALIZED !== null) {
            return self::$FIELD_INITIALIZED;
        }

        return self::$FIELD_INITIALIZED = new self('FIELD_INITIALIZED', self::FIELD_INITIALIZED_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_EVENTS_COUNT()
    {
        if (self::$FIELD_EVENTS_COUNT !== null) {
            return self::$FIELD_EVENTS_COUNT;
        }

        return self::$FIELD_EVENTS_COUNT = new self('FIELD_EVENTS_COUNT', self::FIELD_EVENTS_COUNT_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_FILE_SIZE()
    {
        if (self::$FIELD_FILE_SIZE !== null) {
            return self::$FIELD_FILE_SIZE;
        }

        return self::$FIELD_FILE_SIZE = new self('FIELD_FILE_SIZE', self::FIELD_FILE_SIZE_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_ONLINE_MODE()
    {
        if (self::$FIELD_ONLINE_MODE !== null) {
            return self::$FIELD_ONLINE_MODE;
        }

        return self::$FIELD_ONLINE_MODE = new self('FIELD_ONLINE_MODE', self::FIELD_ONLINE_MODE_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_BALANCE()
    {
        if (self::$FIELD_BALANCE !== null) {
            return self::$FIELD_BALANCE;
        }

        return self::$FIELD_BALANCE = new self('FIELD_BALANCE', self::FIELD_BALANCE_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_LAST_LOGIN_IP()
    {
        if (self::$FIELD_LAST_LOGIN_IP !== null) {
            return self::$FIELD_LAST_LOGIN_IP;
        }

        return self::$FIELD_LAST_LOGIN_IP = new self('FIELD_LAST_LOGIN_IP', self::FIELD_LAST_LOGIN_IP_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_TARIFF()
    {
        if (self::$FIELD_TARIFF !== null) {
            return self::$FIELD_TARIFF;
        }

        return self::$FIELD_TARIFF = new self('FIELD_TARIFF', self::FIELD_TARIFF_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_DESIRED_LOGIN()
    {
        if (self::$FIELD_DESIRED_LOGIN !== null) {
            return self::$FIELD_DESIRED_LOGIN;
        }

        return self::$FIELD_DESIRED_LOGIN = new self('FIELD_DESIRED_LOGIN', self::FIELD_DESIRED_LOGIN_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_EMAIL()
    {
        if (self::$FIELD_EMAIL !== null) {
            return self::$FIELD_EMAIL;
        }

        return self::$FIELD_EMAIL = new self('FIELD_EMAIL', self::FIELD_EMAIL_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_COMMENTS()
    {
        if (self::$FIELD_COMMENTS !== null) {
            return self::$FIELD_COMMENTS;
        }

        return self::$FIELD_COMMENTS = new self('FIELD_COMMENTS', self::FIELD_COMMENTS_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_TAGS()
    {
        if (self::$FIELD_TAGS !== null) {
            return self::$FIELD_TAGS;
        }

        return self::$FIELD_TAGS = new self('FIELD_TAGS', self::FIELD_TAGS_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_USER_PACK_ID()
    {
        if (self::$FIELD_USER_PACK_ID !== null) {
            return self::$FIELD_USER_PACK_ID;
        }

        return self::$FIELD_USER_PACK_ID = new self('FIELD_USER_PACK_ID', self::FIELD_USER_PACK_ID_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_SIP_REGISTRATION()
    {
        if (self::$FIELD_SIP_REGISTRATION !== null) {
            return self::$FIELD_SIP_REGISTRATION;
        }

        return self::$FIELD_SIP_REGISTRATION = new self('FIELD_SIP_REGISTRATION', self::FIELD_SIP_REGISTRATION_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_SIP_LOGIN()
    {
        if (self::$FIELD_SIP_LOGIN !== null) {
            return self::$FIELD_SIP_LOGIN;
        }

        return self::$FIELD_SIP_LOGIN = new self('FIELD_SIP_LOGIN', self::FIELD_SIP_LOGIN_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_BA_BALANCE_LIMIT()
    {
        if (self::$FIELD_BA_BALANCE_LIMIT !== null) {
            return self::$FIELD_BA_BALANCE_LIMIT;
        }

        return self::$FIELD_BA_BALANCE_LIMIT = new self('FIELD_BA_BALANCE_LIMIT', self::FIELD_BA_BALANCE_LIMIT_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_BA_BALANCE_USED()
    {
        if (self::$FIELD_BA_BALANCE_USED !== null) {
            return self::$FIELD_BA_BALANCE_USED;
        }

        return self::$FIELD_BA_BALANCE_USED = new self('FIELD_BA_BALANCE_USED', self::FIELD_BA_BALANCE_USED_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_BUSINESS_ACCOUNT()
    {
        if (self::$FIELD_BUSINESS_ACCOUNT !== null) {
            return self::$FIELD_BUSINESS_ACCOUNT;
        }

        return self::$FIELD_BUSINESS_ACCOUNT = new self('FIELD_BUSINESS_ACCOUNT', self::FIELD_BUSINESS_ACCOUNT_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_NAME1()
    {
        if (self::$FIELD_NAME1 !== null) {
            return self::$FIELD_NAME1;
        }

        return self::$FIELD_NAME1 = new self('FIELD_NAME1', self::FIELD_NAME1_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_NAME2()
    {
        if (self::$FIELD_NAME2 !== null) {
            return self::$FIELD_NAME2;
        }

        return self::$FIELD_NAME2 = new self('FIELD_NAME2', self::FIELD_NAME2_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_NAME3()
    {
        if (self::$FIELD_NAME3 !== null) {
            return self::$FIELD_NAME3;
        }

        return self::$FIELD_NAME3 = new self('FIELD_NAME3', self::FIELD_NAME3_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function FIELD_SECURITY_PARAMETERS()
    {
        if (self::$FIELD_SECURITY_PARAMETERS !== null) {
            return self::$FIELD_SECURITY_PARAMETERS;
        }

        return self::$FIELD_SECURITY_PARAMETERS = new self('FIELD_SECURITY_PARAMETERS', self::FIELD_SECURITY_PARAMETERS_VALUE);
    }

    /**
     * @param int $value
     * @return \EncryptServer\Protocol\Vipadmin\get_user_list\Field
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 1: return self::FIELD_LOGIN();
            case 2: return self::FIELD_NICKNAME();
            case 3: return self::FIELD_LAST_LOGIN_TIME();
            case 4: return self::FIELD_CREATED();
            case 5: return self::FIELD_BLOCKED();
            case 6: return self::FIELD_BA_BLOCKED();
            case 7: return self::FIELD_INITIALIZED();
            case 8: return self::FIELD_EVENTS_COUNT();
            case 9: return self::FIELD_FILE_SIZE();
            case 10: return self::FIELD_ONLINE_MODE();
            case 12: return self::FIELD_BALANCE();
            case 13: return self::FIELD_LAST_LOGIN_IP();
            case 14: return self::FIELD_TARIFF();
            case 15: return self::FIELD_DESIRED_LOGIN();
            case 16: return self::FIELD_EMAIL();
            case 17: return self::FIELD_COMMENTS();
            case 18: return self::FIELD_TAGS();
            case 19: return self::FIELD_USER_PACK_ID();
            case 20: return self::FIELD_SIP_REGISTRATION();
            case 21: return self::FIELD_SIP_LOGIN();
            case 22: return self::FIELD_BA_BALANCE_LIMIT();
            case 23: return self::FIELD_BA_BALANCE_USED();
            case 24: return self::FIELD_BUSINESS_ACCOUNT();
            case 25: return self::FIELD_NAME1();
            case 26: return self::FIELD_NAME2();
            case 27: return self::FIELD_NAME3();
            case 28: return self::FIELD_SECURITY_PARAMETERS();
            default: return null;
        }
    }


}

