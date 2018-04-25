<?php
/**
 * @mainpage Encrypt Server
 *
 * @section Using How to use
 *
 * @code
 *   use EncryptServer\Utils;
 *   $facade = new \EncryptServer\UserFacade(new Utils\ProtobufClientAdmin([
        "uri" => "ssl://192.168.111.234:37213",
        'domain' => "example.com",
        'login' => "testadmin",
        'password' => "654987",
        'adminPassword' => "654987",
        'useStreamContext' => true
        ]));
 *
 *
 * @endcode
 *
 * @section UsingValidator Use with validators data
 *
 * @code
 * use EncryptServer\Utils;
 * use EncryptServer\Decorators\UserFacade\UserFacadeValidator;
 *
 *   $facade = new UserFacadeValidator(new \EncryptServer\UserFacade(new Utils\ProtobufClientAdmin([
 *   "uri" => "ssl://192.168.111.234:37212",
 *  'domain' => "example.com",
 *   'login' => "testadmin",
 *   'password' => "654987",
 *   'adminPassword' => "654987",
 *  'useStreamContext' => true
 *   ])));
 * @endcode
 *
 *
 * @section UsingJson JSON answer
 *
 * @code
 * use EncryptServer\Utils;
 * use EncryptServer\Decorators\UserFacade\UserFacadeJsonResponse;
 *
 *   $facade = new UserFacadeJsonResponse(new \EncryptServer\UserFacade(new Utils\ProtobufClientAdmin([
 *   "uri" => "ssl://192.168.111.234:37211",
 *  'domain' => "example.com",
 *   'login' => "testadmin",
 *   'password' => "654987",
 *   'adminPassword' => "654987",
 *  'useStreamContext' => true
 *   ])));
 * @endcode
 */