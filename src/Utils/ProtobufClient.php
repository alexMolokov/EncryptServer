<?php
/**
 * Created by PhpStorm.
 * User: Анастасия
 * Date: 03.04.2018
 * Time: 10:26
 */

namespace EncryptServer\Utils;

use  EncryptServer\Interfaces;
use  EncryptServer\Protocol;
use  EncryptServer\Exceptions;
use  EncryptServer\Protocol\Vipadmin\auth_request_response\Status;
use Protobuf\AbstractMessage;

/**
 * @brief Client to connect to Server
 *
 */
class ProtobufClient implements Interfaces\IProtobufClient
{
    /**
     * Prefix for commands
     */
   const MESSAGE_BASE = 'EncryptServer\\Protocol\\';

   /**
    * Server URI
    */
   private $_uri;

    /**
     * Use stream context or no
     */
   private $_useStreamContext;

   private $_socket;
   private $_sequenceId = 0;
   private $_last_message;

   private static $CommandsEnum = [
        'error_response' => 3000,
        'keep_alive' => 3001,
        'status_command' => 6000,

        'Auth\auth_ask_credentials' => 1000,
        'Auth\auth_send_credentials' => 1001,
        'Auth\auth_result' => 1002,
        'Auth\auth_redirect' => 1003,
        'Auth\auth_set_online_mode' => 1004,
        'Auth\auth_roaming_suggestions' => 1005,
        'Auth\features_request' => 1006,
        'Auth\features_response' => 1007,

        'Vipadmin\auth_start' => 17000,
        'Vipadmin\auth_start_response' => 17001,
        'Vipadmin\auth_request' => 17002,
        'Vipadmin\auth_request_response' => 17003,
        'Vipadmin\get_user_list' => 17004,
        'Vipadmin\get_user_list_response' => 17005,
        'Vipadmin\get_user_profile' => 17006,
        'Vipadmin\get_user_profile_response' => 17007,
        'Vipadmin\save_user_profile' => 17008,
        'Vipadmin\get_ba_admins' => 17009,
        'Vipadmin\get_ba_admins_response' => 17010,
        'Vipadmin\ba_config_admins' => 17011,
        'Vipadmin\ba_config_admins_response' => 17012,
        'Vipadmin\get_ba_parameters' => 17013,
        'Vipadmin\get_ba_parameters_response' => 17014,
        'Vipadmin\save_ba_parameters' => 17015,
        'Vipadmin\ba_add_admin' => 17016,
        'Vipadmin\ba_delete_admin' => 17017,
        'Vipadmin\ba_change_admin_role' => 17018,
        'Vipadmin\set_admin_password' => 17019,
        'Vipadmin\set_admin_password_response' => 17020,
        'Vipadmin\ba_get_admin_logs' => 17021,
        'Vipadmin\ba_get_admin_logs_response' => 17022,
        'Vipadmin\ba_admin_logged' => 17023,
        'Vipadmin\get_user_logs' => 17024,
        'Vipadmin\get_user_logs_response' => 17025,
        'Vipadmin\ba_add_new_user_tag' => 17026,
        'Vipadmin\ba_add_new_user_tag_response' => 17027,
        'Vipadmin\ba_dynamic_group' => 17028,
        'Vipadmin\ba_dynamic_group_response' => 17029,
        'Vipadmin\ba_dynamic_group_users_read' => 17030,
        'Vipadmin\ba_dynamic_group_users_read_response' => 17031,
        'Vipadmin\ba_shared_contactlist' => 17032,
        'Vipadmin\ba_shared_contactlist_response' => 17033,
        'Vipadmin\add_user' => 17034,
        'Vipadmin\add_user_response' => 17035,
        'Vipadmin\get_user_contactlist' => 17036,
        'Vipadmin\get_user_contactlist_response' => 17037,
        'Vipadmin\user_contactlist_operation' => 17038,
        'Vipadmin\user_contactlist_operation_response' => 17039,
        'Vipadmin\get_online_sessions' => 17040,
        'Vipadmin\get_online_sessions_response' => 17041,
        'Vipadmin\close_online_sessions' => 17042,
        'Vipadmin\close_online_sessions_response' => 17043,
        'Vipadmin\save_extra_user_profile' => 17044,
        'Vipadmin\save_extra_user_profile_response' => 17045,
        'Vipadmin\ba_security_template' => 17046,
        'Vipadmin\ba_security_template_response' => 17047,
        'Vipadmin\save_user_security' => 17048,
        'Vipadmin\save_user_security_response' => 17049,
        'Vipadmin\delete_user' => 17050,
        'Vipadmin\expel_user' => 17051,
        'Vipadmin\accept_ba_join_request' => 17052,
        'Vipadmin\decline_ba_join_request' => 17053,
        'Vipadmin\ba_join_request_response' => 17054,
        'Vipadmin\ba_suspend_user_pack' => 17055,
        'Vipadmin\ba_resume_user_pack' => 17056,
        'Vipadmin\save_sip_parameters' => 17057,
        'Vipadmin\save_sip_parameters_response' => 17058,
        'Vipadmin\set_ba_balance_limit' => 17059,
        'Vipadmin\set_ba_balance_limit_response' => 17060,
        'Vipadmin\clear_user_history' => 17061,
        'Vipadmin\ba_block' => 17062,
        'Vipadmin\ba_unblock' => 17063,
        'Vipadmin\ba_apply_security_template' => 17064,
        'Vipadmin\ba_apply_security_template_response' => 17065,
        'Vipadmin\delete_users' => 17066,
        'Vipadmin\expel_users' => 17067,
        'Vipadmin\delete_users_response' => 17068,
        'Vipadmin\expel_users_response' => 17069,
        'Vipadmin\list_ldap_users' => 17070,
        'Vipadmin\list_ldap_users_response' => 17071,
        'Vipadmin\list_ldap_users_getmore' => 17072,
        'Vipadmin\list_ldap_users_getmore_response' => 17073,
        'Vipadmin\kill_last_op' => 17074,
        'Vipadmin\ba_refresh_contactlist' => 17075,
        'Vipadmin\get_list_of_business_accounts' => 17076,
        'Vipadmin\get_list_of_business_accounts_response' => 17077,

        'Vipadmin\create_business_account'=>17078,
        'Vipadmin\create_business_account_response'=>17079,
        'Vipadmin\move_user_to_business_account'=>17080,
        'Vipadmin\move_user_to_business_account_response'=>17081,

        'Vipadmin\join_team_account_apply'=>17112,
        'Vipadmin\join_team_account_apply_response'=>17113

    ];

    /**
     * @brief ProtobufClient constructor.
     * @param string $uri
     * @param bool $useStreamContext
     * @throws NotSupportedVersionException
     */
   public function __construct($uri, $useStreamContext = true)
   {
       $this->_uri = $uri;
       $this->_useStreamContext = $useStreamContext;
       if(PHP_INT_SIZE <= 4) throw new Exceptions\NotSupportedVersionException();
   }

    /**
     * @brief Read message from Server
     * @param AbstractMessage $messageType
     * @param string $unpackFormat
     * @return mixed
     * @throws CommonException
     * @throws UnknownMessageException
     */
   public function readCmd($messageType = null, $unpackFormat = "L*")
    {
        do
        {
            $data = fread($this->_socket, 8);
            $VPacketHeader = unpack($unpackFormat, $data);

            $length = ($VPacketHeader[1] + $VPacketHeader[2] - 8);
            $stream = fopen('php://temp', 'rbw+');
            stream_copy_to_stream($this->_socket, $stream, $length);
            fseek($stream, 0);

            $Command = new Protocol\Command($stream);

            $Header = $Command->getHeader();
            $HeaderSequenceId = $Header->getResponsedCommandSeq();
            //if($HeaderSequenceId != $this->_sequenceId)
              //  echo __FUNCTION__."[]: sequence missmatch ".$Header->getResponsedCommandSeq().' != '.$this->_sequenceId;



            $messageName = $this->_getMessageClassName($Header->getCommand());

            if(!$messageName)
            {
                continue;
            }
            elseif($messageName=='error_response')
            {
                $error_response = new Protocol\error_response($Command->getBody());
                if($this->_last_message)
                    throw new Exceptions\UnknownMessageException('Client: ' . $error_response->getCode()->name(), 1500 + $error_response->getCode());
            }
            elseif (
                !empty($messageType)
                && (
                    (is_array($messageType) && !in_array($messageName, $messageType))
                    || (is_string($messageType) && $messageName !== $messageType)
                )
            )
            {
                $messageName = null;
                continue;
            }
        } while(!$messageName && $this->_socket);


        $messageClass = self::MESSAGE_BASE . $messageName;
        $Message = new $messageClass($Command->getBody());

        if ($messageName == 'error_response')
        {
            die();
        }
        elseif (method_exists($Message, 'getStatus') && $Message->getStatus() !== Status::OK_VALUE)
        {
            throw new Exceptions\CommonException(Status::valueOf($Message->getStatus())->name(), 1000 + $Message->getStatus());
        }

        return $Message;
    }

    /**
     * @brief Send message to Server
     * @param AbstractMessage $Message
     * @param string $packFormat
     * @throws ErrorException
     *
     */
    public function sendCmd(\Protobuf\AbstractMessage $Message, $packFormat = "L")
    {
        $messageName = $this->_getMessageClassName($Message);

        $Sender = Protocol\Address::fromArray([
            'type' => Protocol\Address\Type::TYPE_USER_VALUE
        ]);
        $Header = Protocol\Header::fromArray([
            'command' => self::$CommandsEnum[$messageName],
            'command_seq' => ++$this->_sequenceId,
            'sender' => $Sender
        ]);

        $Command = new Protocol\Command();
        $Command->setHeader($Header);
        $Command->setBody($Message->toStream());
        $stream = $Command->toStream();
        $data = pack($packFormat, 8).pack($packFormat, $stream->getSize()) . $stream->getContents();
        try
        {
            fwrite($this->_socket, $data);
            $this->_last_message = $Message;

        }
        catch (\ErrorException $e)
        {
            if ($e->getCode() !== 1) throw $e;

            $this->_handleFailure(function () use ($Message)
            {
                $this->sendCmd($Message);
            });
        }
    }

    /**
     * @brief Destruct object
     */
    public function __destruct()
    {
        if(is_resource($this->_socket))
        {
            fclose($this->_socket);
        }
     }

    /**
     * @brief Connect to Server
     * @return bool|resource
     * @throws FailedConnectException
     */
     public function connect()
     {
         if(is_resource($this->_socket)) return $this->_socket;

         $this->_socket = stream_socket_client(
             $this->_uri,
             $errno,
             $errstr,
             30,
             STREAM_CLIENT_CONNECT,
             $this->_getStreamContext()
         );

         if(!is_resource($this->_socket)) throw new Exceptions\FailedConnectException($errstr,$errno);

         return $this->_socket;
     }


    private function _getMessageClassName($obj)
        {
            if(is_object($obj))
            {
                return str_replace(self::MESSAGE_BASE, '', get_class($obj));
            }
            elseif(is_int($obj))
            {
                return array_search($obj, self::$CommandsEnum);
            }
            return null;
        }
    private function _getStreamContext()
    {
        if($this->_useStreamContext)
        {
            return  stream_context_create([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                    'verify_depth' => 0]
            ]);
        }

        return stream_context_create([]);
    }
}