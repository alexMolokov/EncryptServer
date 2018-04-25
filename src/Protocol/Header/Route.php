<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : global.proto
 */


namespace EncryptServer\Protocol\Header;

/**
 * Protobuf enum : EncryptServer.command.Header.Route
 */
class Route extends \Protobuf\Enum
{

    /**
     * ROUTE_LOCAL = 1
     */
    const ROUTE_LOCAL_VALUE = 1;

    /**
     * ROUTE_OTHER_CLUSTER = 2
     */
    const ROUTE_OTHER_CLUSTER_VALUE = 2;

    /**
     * ROUTE_FOREIGN_HOST = 3
     */
    const ROUTE_FOREIGN_HOST_VALUE = 3;

    /**
     * ROUTE_FOREIGN_HOST_VIA_OTHER_CLUSTER = 4
     */
    const ROUTE_FOREIGN_HOST_VIA_OTHER_CLUSTER_VALUE = 4;

    /**
     * @var \EncryptServer\Protocol\Header\Route
     */
    protected static $ROUTE_LOCAL = null;

    /**
     * @var \EncryptServer\Protocol\Header\Route
     */
    protected static $ROUTE_OTHER_CLUSTER = null;

    /**
     * @var \EncryptServer\Protocol\Header\Route
     */
    protected static $ROUTE_FOREIGN_HOST = null;

    /**
     * @var \EncryptServer\Protocol\Header\Route
     */
    protected static $ROUTE_FOREIGN_HOST_VIA_OTHER_CLUSTER = null;

    /**
     * @return \EncryptServer\Protocol\Header\Route
     */
    public static function ROUTE_LOCAL()
    {
        if (self::$ROUTE_LOCAL !== null) {
            return self::$ROUTE_LOCAL;
        }

        return self::$ROUTE_LOCAL = new self('ROUTE_LOCAL', self::ROUTE_LOCAL_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Header\Route
     */
    public static function ROUTE_OTHER_CLUSTER()
    {
        if (self::$ROUTE_OTHER_CLUSTER !== null) {
            return self::$ROUTE_OTHER_CLUSTER;
        }

        return self::$ROUTE_OTHER_CLUSTER = new self('ROUTE_OTHER_CLUSTER', self::ROUTE_OTHER_CLUSTER_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Header\Route
     */
    public static function ROUTE_FOREIGN_HOST()
    {
        if (self::$ROUTE_FOREIGN_HOST !== null) {
            return self::$ROUTE_FOREIGN_HOST;
        }

        return self::$ROUTE_FOREIGN_HOST = new self('ROUTE_FOREIGN_HOST', self::ROUTE_FOREIGN_HOST_VALUE);
    }

    /**
     * @return \EncryptServer\Protocol\Header\Route
     */
    public static function ROUTE_FOREIGN_HOST_VIA_OTHER_CLUSTER()
    {
        if (self::$ROUTE_FOREIGN_HOST_VIA_OTHER_CLUSTER !== null) {
            return self::$ROUTE_FOREIGN_HOST_VIA_OTHER_CLUSTER;
        }

        return self::$ROUTE_FOREIGN_HOST_VIA_OTHER_CLUSTER = new self('ROUTE_FOREIGN_HOST_VIA_OTHER_CLUSTER', self::ROUTE_FOREIGN_HOST_VIA_OTHER_CLUSTER_VALUE);
    }

    /**
     * @param int $value
     * @return \EncryptServer\Protocol\Header\Route
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 1: return self::ROUTE_LOCAL();
            case 2: return self::ROUTE_OTHER_CLUSTER();
            case 3: return self::ROUTE_FOREIGN_HOST();
            case 4: return self::ROUTE_FOREIGN_HOST_VIA_OTHER_CLUSTER();
            default: return null;
        }
    }


}

