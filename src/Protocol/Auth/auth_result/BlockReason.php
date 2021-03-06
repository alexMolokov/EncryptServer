<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : auth.proto
 */


namespace EncryptServer\Protocol\Auth\auth_result;

/**
 * Protobuf enum : encryptserver.auth_result.BlockReason
 */
class BlockReason extends \Protobuf\Enum
{

    /**
     * AdminManual = 0
     */
    const AdminManual_VALUE = 0;

    /**
     * BaManual = 1
     */
    const BaManual_VALUE = 1;

    /**
     * UserNotPaid = 2
     */
    const UserNotPaid_VALUE = 2;

    /**
     * BaNotPaid = 3
     */
    const BaNotPaid_VALUE = 3;

    /**
     * BlockedInLdap = 4
     */
    const BlockedInLdap_VALUE = 4;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\BlockReason
     */
    protected static $AdminManual = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\BlockReason
     */
    protected static $BaManual = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\BlockReason
     */
    protected static $UserNotPaid = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\BlockReason
     */
    protected static $BaNotPaid = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\BlockReason
     */
    protected static $BlockedInLdap = null;

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\BlockReason
     */
    public static function AdminManual()
    {
        if (self::$AdminManual !== null) {
            return self::$AdminManual;
        }

        return self::$AdminManual = new self('AdminManual', self::AdminManual_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\BlockReason
     */
    public static function BaManual()
    {
        if (self::$BaManual !== null) {
            return self::$BaManual;
        }

        return self::$BaManual = new self('BaManual', self::BaManual_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\BlockReason
     */
    public static function UserNotPaid()
    {
        if (self::$UserNotPaid !== null) {
            return self::$UserNotPaid;
        }

        return self::$UserNotPaid = new self('UserNotPaid', self::UserNotPaid_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\BlockReason
     */
    public static function BaNotPaid()
    {
        if (self::$BaNotPaid !== null) {
            return self::$BaNotPaid;
        }

        return self::$BaNotPaid = new self('BaNotPaid', self::BaNotPaid_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\BlockReason
     */
    public static function BlockedInLdap()
    {
        if (self::$BlockedInLdap !== null) {
            return self::$BlockedInLdap;
        }

        return self::$BlockedInLdap = new self('BlockedInLdap', self::BlockedInLdap_VALUE);
    }

    /**
     * @param int $value
     * @return \EncryptServer\Protocol\Auth\auth_result\BlockReason
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::AdminManual();
            case 1: return self::BaManual();
            case 2: return self::UserNotPaid();
            case 3: return self::BaNotPaid();
            case 4: return self::BlockedInLdap();
            default: return null;
        }
    }


}

