<?php
/**
 * @mainpage Encrypt Server
 *
 * @section System Requirements
 * PHP >= 5.6.4, 
 * PHP >= 7.0 for Windows
 *
 * @section Installation  Installation (Composer)
 * Unpuck zip file.
 * Add code to composer.json
 * @code
 *  "autoload": {
 *   "psr-4": {
 *       "EncryptServer\\": "path to folder src",
 *       }
 *   }
 * @endcode
 * Run commmand "composer update".
 *
 * @section Using How to use
 *
 * Use only \\EncryptServer\\UserFacade in your application
 *
 * @code
 *   use EncryptServer\Utils;
 *
 *   $facade = new \EncryptServer\UserFacade(new Utils\ProtobufClientAdmin([
 *       "uri" => "ssl://192.168.111.234:37213",
 *      'domain' => "example.com",
 *       'login' => "testadmin",
 *       'password' => "654987",
 *       'adminPassword' => "654987"
 *      ]));
 *
 *     $response = $facade->getUserProfile($login);
 *
 * @endcode
 *
 *
 * @section UsingValidator Use with validators data (UserFacadeValidator)
 *
 * It's Wrapper for UserFacade to check client data
 * @code
 * use EncryptServer\Utils;
 * use EncryptServer\Decorators\UserFacade\UserFacadeValidator;
 *
 *   $facade = new UserFacadeValidator(new \EncryptServer\UserFacade(new Utils\ProtobufClientAdmin([
 *   "uri" => "ssl://192.168.111.234:37212",
 *  'domain' => "example.com",
 *   'login' => "testadmin",
 *   'password' => "654987",
 *   'adminPassword' => "654987"
 *   ])));
 *
 *   $facade->setEmail('1111'); // Get error it's check at UserFacadeValidator
 *
 * @endcode
 *
 *
 * @section UsingJson JSON answer (UserFacadeJsonResponse)
 *
 * If you want to get json answer use wrapper UserFacadeJsonResponse
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
 *   'adminPassword' => "654987"
 *   ])));
 * @endcode
 */