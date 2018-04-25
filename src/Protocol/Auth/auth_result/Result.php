<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : auth.proto
 */


namespace EncryptServer\Protocol\Auth\auth_result;

/**
 * Protobuf enum : encryptserver.auth_result.Result
 */
class Result extends \Protobuf\Enum
{

    /**
     * Ok = 0
     */
    const Ok_VALUE = 0;

    /**
     * Redirect = 1
     */
    const Redirect_VALUE = 1;

    /**
     * AuthFailed = 2
     */
    const AuthFailed_VALUE = 2;

    /**
     * LimitReached = 3
     */
    const LimitReached_VALUE = 3;

    /**
     * DomainBlocked = 4
     */
    const DomainBlocked_VALUE = 4;

    /**
     * UserBlocked = 5
     */
    const UserBlocked_VALUE = 5;

    /**
     * BusinessAccountBlocked = 6
     */
    const BusinessAccountBlocked_VALUE = 6;

    /**
     * ClusterNotFound = 7
     */
    const ClusterNotFound_VALUE = 7;

    /**
     * DomainNotFound = 8
     */
    const DomainNotFound_VALUE = 8;

    /**
     * VersionNotSupported = 9
     */
    const VersionNotSupported_VALUE = 9;

    /**
     * ActivationRequired = 10
     */
    const ActivationRequired_VALUE = 10;

    /**
     * ClientForbidden = 11
     */
    const ClientForbidden_VALUE = 11;

    /**
     * SubscriptionSuspended = 12
     */
    const SubscriptionSuspended_VALUE = 12;

    /**
     * InternalServerError = 13
     */
    const InternalServerError_VALUE = 13;

    /**
     * InvalidParameter = 14
     */
    const InvalidParameter_VALUE = 14;

    /**
     * ApplicationInstanceChangeForbidden = 15
     */
    const ApplicationInstanceChangeForbidden_VALUE = 15;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $Ok = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $Redirect = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $AuthFailed = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $LimitReached = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $DomainBlocked = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $UserBlocked = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $BusinessAccountBlocked = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $ClusterNotFound = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $DomainNotFound = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $VersionNotSupported = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $ActivationRequired = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $ClientForbidden = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $SubscriptionSuspended = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $InternalServerError = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $InvalidParameter = null;

    /**
     * @var \EncryptServer\Protocol\Auth\auth_result\Result
     */
    protected static $ApplicationInstanceChangeForbidden = null;

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function Ok()
    {
        if (self::$Ok !== null) {
            return self::$Ok;
        }

        return self::$Ok = new self('Ok', self::Ok_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function Redirect()
    {
        if (self::$Redirect !== null) {
            return self::$Redirect;
        }

        return self::$Redirect = new self('Redirect', self::Redirect_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function AuthFailed()
    {
        if (self::$AuthFailed !== null) {
            return self::$AuthFailed;
        }

        return self::$AuthFailed = new self('AuthFailed', self::AuthFailed_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function LimitReached()
    {
        if (self::$LimitReached !== null) {
            return self::$LimitReached;
        }

        return self::$LimitReached = new self('LimitReached', self::LimitReached_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function DomainBlocked()
    {
        if (self::$DomainBlocked !== null) {
            return self::$DomainBlocked;
        }

        return self::$DomainBlocked = new self('DomainBlocked', self::DomainBlocked_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function UserBlocked()
    {
        if (self::$UserBlocked !== null) {
            return self::$UserBlocked;
        }

        return self::$UserBlocked = new self('UserBlocked', self::UserBlocked_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function BusinessAccountBlocked()
    {
        if (self::$BusinessAccountBlocked !== null) {
            return self::$BusinessAccountBlocked;
        }

        return self::$BusinessAccountBlocked = new self('BusinessAccountBlocked', self::BusinessAccountBlocked_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function ClusterNotFound()
    {
        if (self::$ClusterNotFound !== null) {
            return self::$ClusterNotFound;
        }

        return self::$ClusterNotFound = new self('ClusterNotFound', self::ClusterNotFound_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function DomainNotFound()
    {
        if (self::$DomainNotFound !== null) {
            return self::$DomainNotFound;
        }

        return self::$DomainNotFound = new self('DomainNotFound', self::DomainNotFound_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function VersionNotSupported()
    {
        if (self::$VersionNotSupported !== null) {
            return self::$VersionNotSupported;
        }

        return self::$VersionNotSupported = new self('VersionNotSupported', self::VersionNotSupported_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function ActivationRequired()
    {
        if (self::$ActivationRequired !== null) {
            return self::$ActivationRequired;
        }

        return self::$ActivationRequired = new self('ActivationRequired', self::ActivationRequired_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function ClientForbidden()
    {
        if (self::$ClientForbidden !== null) {
            return self::$ClientForbidden;
        }

        return self::$ClientForbidden = new self('ClientForbidden', self::ClientForbidden_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function SubscriptionSuspended()
    {
        if (self::$SubscriptionSuspended !== null) {
            return self::$SubscriptionSuspended;
        }

        return self::$SubscriptionSuspended = new self('SubscriptionSuspended', self::SubscriptionSuspended_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function InternalServerError()
    {
        if (self::$InternalServerError !== null) {
            return self::$InternalServerError;
        }

        return self::$InternalServerError = new self('InternalServerError', self::InternalServerError_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function InvalidParameter()
    {
        if (self::$InvalidParameter !== null) {
            return self::$InvalidParameter;
        }

        return self::$InvalidParameter = new self('InvalidParameter', self::InvalidParameter_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function ApplicationInstanceChangeForbidden()
    {
        if (self::$ApplicationInstanceChangeForbidden !== null) {
            return self::$ApplicationInstanceChangeForbidden;
        }

        return self::$ApplicationInstanceChangeForbidden = new self('ApplicationInstanceChangeForbidden', self::ApplicationInstanceChangeForbidden_VALUE);
    }

    /**
     * @param int $value
     * @return \EncryptServer\Protocol\Auth\auth_result\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::Ok();
            case 1: return self::Redirect();
            case 2: return self::AuthFailed();
            case 3: return self::LimitReached();
            case 4: return self::DomainBlocked();
            case 5: return self::UserBlocked();
            case 6: return self::BusinessAccountBlocked();
            case 7: return self::ClusterNotFound();
            case 8: return self::DomainNotFound();
            case 9: return self::VersionNotSupported();
            case 10: return self::ActivationRequired();
            case 11: return self::ClientForbidden();
            case 12: return self::SubscriptionSuspended();
            case 13: return self::InternalServerError();
            case 14: return self::InvalidParameter();
            case 15: return self::ApplicationInstanceChangeForbidden();
            default: return null;
        }
    }


}
