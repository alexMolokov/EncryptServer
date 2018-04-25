<?php
/**
 * Created by PhpStorm.
 * User: Анастасия
 * Date: 04.04.2018
 * Time: 12:08
 */

namespace EncryptServer\Utils;

use EncryptServer\Protocol;
use EncryptServer\Exceptions;
use EncryptServer\Protocol\Vipadmin\auth_request_response\Status;

/**
 * @brief Client to Connect to Server as Admin and send protobuf commands
 */
class ProtobufClientAdmin extends ProtobufClient
{
    /**
     * @var string $_login
     * Login to connect to Server
     */
    protected $_login = "admin";

    /**
     * @var string $_domain
     * Domain to use at Server
     */
    protected $_domain = "example.com";
    /**
     * @var string $_password
     * Password to connect to Server
     */
    protected $_password = "123456";
    /**
     * @var string $_adminPassword
     * Password to connect to Admin Place Server
     */
    protected $_adminPassword = "123456";

    private $_auth = false;

    private $_initialConnection = false;
    private $_vipadminId;

    /**
     * Array of options which used for some commands
     */
    const EXTRA_OP = [
        'EXTRA_OP_ADD'=>0x100,
        'EXTRA_OP_RENAME'=>0x101,
        'EXTRA_OP_DELETE'=>0x102,
        'EXTRA_OP_ADD_GROUP'=>0x103,
        'EXTRA_OP_DELETE_GROUP'=>0x104,
        'EXTRA_OP_RENAME_GROUP'=>0x105,
        'EXTRA_OP_ADD_USER'=>0x106,
        'EXTRA_OP_DELETE_USER'=>0x107,
        'EXTRA_OP_MOVE_USER_TO_GROUP'=>0x108,
        'EXTRA_OP_ADD_TEMPLATE'=>0x109,
        'EXTRA_OP_ADD_DYNAMIC_GROUP'=>0x10a,

        'EXTRA_OP_SECURTY_BLOCK'=>0x10b,
        'EXTRA_OP_SECURTY_PASSWORD'=>0x10c,
        'EXTRA_OP_SECURTY_PERMISSIONS'=>0x10d,
        'EXTRA_OP_SECURTY_KEYS'=>0x10e,
        'EXTRA_OP_SECURTY_FAKE_SECRET_MODE'=>0x10f,
        'EXTRA_OP_SECURTY_FAKE_SECRET_PHRASE'=>0x110,
        'EXTRA_OP_SECURTY_LOCK_MODE'=>0x111,
        'EXTRA_OP_SECURTY_UNLOCK_CODE'=>0x112,
        'EXTRA_OP_SECURTY_AUTOLOGOUT'=>0x113,

        'EXTRA_OP_UPDATE'=>0x114,
        'EXTRA_OP_SECURTY_SETTINGS'=>0x115,

        'EXTRA_OP_SECURTY_RESTORE_PPH'=>0x116,
        'EXTRA_OP_SECURTY_REMOVE_CRYPT_RECORD'=>0x117
    ];

    /**
     * @brief Construct client to send command to Encrypt Server
     * @param array $adminConfig
     *
     * @details Construct client to send command to Encrypt Server. Allow params "domain","login","password","adminPassword","uri","useStreamContext"
     */
    public function __construct($adminConfig = [])
    {
        parent::__construct($adminConfig["uri"], $adminConfig["useStreamContext"]);
        $params = ["domain","login","password","adminPassword"];

        foreach($params as $key)
        {
            $param = "_{$key}";
            if (isset($adminConfig[$key]))  $this->{$param} = $adminConfig[$key];
        }
    }

    /**
     * @brief Read command from Server
     * @param \Protobuf\AbstractMessage $messageType
     * @param string $unpackFormat
     * @return mixed
     */
    public function readCmd($messageType = null, $unpackFormat = "L*")
    {
        if(!$this->_initialConnection) $this->connect();
        return parent::readCmd($messageType,$unpackFormat);
    }

    /**
     * @brief Send command to Server
     * @param \Protobuf\AbstractMessage $Message
     * @param string $packFormat
     *
     */
    public function sendCmd(\Protobuf\AbstractMessage $Message, $packFormat = "L")
    {
        if(!$this->_initialConnection) $this->connect();
        parent::sendCmd($Message, $packFormat);
    }

    /**
     * @brief Connect to admin place
     */
    public function connect()
    {
        if($this->_auth) return;
        $socket = parent::connect();
        $this->_initialConnection = true;
        $this->_auth();
        $this->_setVipAdminId($socket);
        $this->_authAdmin();
    }

    /**
     * @brief Get vipAdminId. Which used to send command to server.
     */
    public function getVipAdminId()
    {
        if(!$this->_vipadminId) $this->connect();
        return $this->_vipadminId;
    }

    /**
     * @brief Get domain
     * @return string
     */
    public function getDomain()
    {
        return $this->_domain;
    }

    /**
     * @brief Return password hash for login
     * @param string $login
     * @param string $password
     * @param string $domain
     * @return string
     */
    public function passwordHash($login, $password, $domain = null)
    {
        return base64_encode(sha1(sha1(($domain ?: $this->_domain) . $login, true) . $password, true));
    }

    /**
     * @brief Return password login as Hex
     * @param string $login
     * @param string $password
     * @param string $domain
     * @return string
     */
    public function passwordHashHex($login, $password, $domain = null)
    {
        return sha1(sha1(($domain ?: $this->_domain) . $login) . $password);
    }

    private function _setVipAdminId($socket)
    {
        list($host, $port) = explode(':', stream_socket_get_name($socket, false));
        $addr = explode('.', $host);
        $this->_vipadminId =  ($addr[3]<<19 | $addr[2]<<18| $addr[1]<<17 | $addr[0]<<16 | $port);
    }
    private function _auth()
    {
        $auth_ask_credentials = $this->readCmd();
        $clientSeed = rand(0, getrandmax());
        $auth_send_credentials = Protocol\Auth\auth_send_credentials::fromArray([
            'login' => $this->_login,
            'domain' => $this->_domain,
            'resource' => 'vipadmin',
            'client_seed' => $clientSeed,
            'digest' => $this->digest(
                $this->_login,
                $this->_password,
                $this->_domain,
                $clientSeed,
                $auth_ask_credentials->getServerSeed()
            ),
            'client_version_from_ini' => 0,
            'client_version_from_def' => 3005000,
            'system_info' => json_encode(['application_instance' => "Encrypt Server API"]), //up to configs as Deployment ID
            'resource_file_version' => 0,
            'data_channel' => false
        ]);

        $this->sendCmd($auth_send_credentials);
        $auth_result = $this->readCmd();
        if ($auth_result->getResult()->value() !== Protocol\Auth\auth_result\Result::Ok_VALUE)
        {

            throw new Exceptions\CommonException('Client: ' . $auth_result->getResult()->name(), 1600 + $auth_result->getResult()->value());
        }
    }

    private function _authAdmin()
    {
        $auth_start = Protocol\Vipadmin\auth_start::fromArray([
            'id' => $this->_vipadminId
        ]);

        $this->sendCmd($auth_start);
        $auth_start_response = $this->readCmd();

        $clientSeed = rand(0, getrandmax());
        $serverSeed = $auth_start_response->getServerSeed();

        $auth_request = Protocol\Vipadmin\auth_request::fromArray([
            'id' => $this->_vipadminId,
            'client_seed' => $clientSeed,
            'check_access' => $this->digest(
                $this->_login,
                $this->_adminPassword,
                $this->_domain,
                $clientSeed,
                $serverSeed
            )
        ]);

        $this->sendCmd($auth_request);
        $auth_request_response = $this->readCmd();

        if ($auth_request_response->getStatus() !== Status::OK_VALUE)
        {
            $status = Status::valueOf($auth_request_response->getStatus())->name();
            throw new Exception($status, 1000 + $auth_request_response->getStatus());
        }

        $this->_auth = true;
    }

    private function digest($login, $password, $domain, $clientSalt, $serverSalt)
    {
        $ps = $this->passwordHash($login, $password, $domain);

        $clientSalt = pack("l", $clientSalt);
        $serverSalt = pack("L", $serverSalt);
        $l = strlen($ps);
        for ($i = 0; $i < $l; ++$i)
        {
            $ps[$i] = ($ps[$i] ^ $clientSalt[$i % 4]);
            $ps[$i] = ($ps[$i] ^ $serverSalt[$i % 4]);
        }
        return sha1($clientSalt . $ps . $serverSalt, true);
    }

    /**
     * @brief Get extra options for some Commands
     * @param string $name
     * @return mixed|null
     */
    public function getExtraOp($name)
    {
        return (isset(self::EXTRA_OP[$name]))? self::EXTRA_OP[$name]: null;
    }
}