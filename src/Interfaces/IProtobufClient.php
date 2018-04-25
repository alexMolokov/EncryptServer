<?php
/**
 * Created by PhpStorm.
 * User: Анастасия
 * Date: 03.04.2018
 * Time: 10:23
 */

namespace EncryptServer\Interfaces;

/**
 * @brief Interface for work with Server
 *
 */
interface IProtobufClient
{
    /**
     * @brief  Connect to Server
     */
    public function connect();
    /**
     * @brief  Send command to Server
     * @param \Protobuf\AbstractMessage $Message
     * @param string $packFormat
     */
    public function sendCmd(\Protobuf\AbstractMessage $Message, $packFormat);

    /**
     * @brief  Read command from Server
     * @param \Protobuf\AbstractMessage $messageType
     * @param string $unpackFormat
     */
    public function readCmd($messageType, $unpackFormat);
}